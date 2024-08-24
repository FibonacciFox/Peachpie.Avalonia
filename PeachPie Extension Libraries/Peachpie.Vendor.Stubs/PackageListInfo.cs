using System;
using System.Diagnostics;
using System.IO;
using Microsoft.Build.Utilities;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

namespace Peachpie.Vendor.Stubs
{
    /// <summary>
    /// Класс <c>PackageListInfo</c> отвечает за обработку списка NuGet пакетов,
    /// поиск PHP файлов в соответствующих директориях и копирование их в структуру стубов.
    /// </summary>
    public class PackageListInfo : Task
    {
        /// <summary>
        /// Директория, куда будут копироваться файлы PHP для использования в проекте.
        /// </summary>
        public string StubsDirectory { get; set; }

        /// <summary>
        /// Шаблон пути, используемый для поиска PHP файлов в локальном репозитории NuGet.
        /// </summary>
        public string NugetPackagePathPattern { get; set; }

        /// <summary>
        /// Основной метод, выполняющий задачу. Он удаляет и создает каталоги стубов,
        /// запускает команду <c>dotnet list package</c>, обрабатывает полученные данные,
        /// и копирует файлы PHP в соответствующие каталоги.
        /// </summary>
        /// <returns>Возвращает <c>true</c>, если задача выполнена успешно, иначе <c>false</c>.</returns>
        public override bool Execute()
        {
            try
            {
                DeleteAndCreateDirectory(StubsDirectory);

                string output = RunDotnetListPackage();

                var packages = JsonConvert.DeserializeObject<JObject>(output);

                if (packages == null)
                {
                    Log.LogError("Failed to parse package list JSON.");
                    return false;
                }

                ProcessPackages(packages);

                return true;
            }
            catch (Exception ex)
            {
                Log.LogError($"An error occurred: {ex.Message}");
                return false;
            }
        }

        /// <summary>
        /// Удаляет каталог, если он существует, и затем создает его заново.
        /// </summary>
        /// <param name="path">Путь к каталогу, который нужно удалить и создать заново.</param>
        private void DeleteAndCreateDirectory(string path)
        {
            if (Directory.Exists(path))
            {
                Directory.Delete(path, true);
            }
            Directory.CreateDirectory(path);
        }

        /// <summary>
        /// Выполняет команду <c>dotnet list package</c> и возвращает ее вывод в виде строки.
        /// </summary>
        /// <returns>Вывод команды <c>dotnet list package</c> в формате JSON.</returns>
        private string RunDotnetListPackage()
        {
            var startInfo = new ProcessStartInfo
            {
                FileName = "dotnet",
                Arguments = "list package --include-transitive --format json",
                RedirectStandardOutput = true,
                UseShellExecute = false,
                CreateNoWindow = true,
            };

            using var process = new Process { StartInfo = startInfo };
            process.Start();

            using var reader = new StreamReader(process.StandardOutput.BaseStream);
            var output = reader.ReadToEnd();
            process.WaitForExit();

            return output;
        }

        /// <summary>
        /// Обрабатывает JSON, содержащий информацию о пакетах, и копирует файлы PHP из пакетов
        /// в соответствующие каталоги стубов.
        /// </summary>
        /// <param name="packages">Объект JSON, содержащий информацию о пакетах и их версиях.</param>
        private void ProcessPackages(JObject packages)
        {
            foreach (var project in packages["projects"].Children<JObject>())
            {
                foreach (var framework in project["frameworks"].Children<JObject>())
                {
                    foreach (var package in framework["topLevelPackages"].Children<JObject>())
                    {
                        var packageId = package["id"].ToString();
                        var version = package["resolvedVersion"].ToString();

                        var nugetPackagePath = NugetPackagePathPattern
                            .Replace("{PackageId}", packageId)
                            .Replace("{Version}", version);

                        var packageStubsDirectory = Path.Combine(StubsDirectory, packageId, version);

                        Log.LogMessage($"Searching for PHP files in '{nugetPackagePath}'");

                        if (Directory.Exists(nugetPackagePath))
                        {
                            ProcessFiles(nugetPackagePath, packageStubsDirectory);
                        }
                        else
                        {
                            Log.LogWarning($"The directory '{nugetPackagePath}' does not exist.");
                        }
                    }
                }
            }
        }

        /// <summary>
        /// Копирует файлы PHP из исходного каталога в каталог стубов.
        /// </summary>
        /// <param name="sourcePath">Исходный каталог, в котором ищутся файлы PHP.</param>
        /// <param name="destinationPath">Каталог назначения, куда копируются файлы PHP.</param>
        private void ProcessFiles(string sourcePath, string destinationPath)
        {
            var directories = Directory.GetDirectories(sourcePath, "*", SearchOption.AllDirectories);
            foreach (var dir in directories)
            {
                var phpFiles = Directory.GetFiles(dir, "*.php", SearchOption.TopDirectoryOnly);
                foreach (var file in phpFiles)
                {
                    var relativePath = Path.GetRelativePath(sourcePath, file);
                    var destFile = Path.Combine(destinationPath, relativePath);

                    EnsureDirectoryExists(Path.GetDirectoryName(destFile));
                    File.Copy(file, destFile, true);
                }
            }
        }

        /// <summary>
        /// Проверяет, существует ли каталог, и создает его, если он не существует.
        /// </summary>
        /// <param name="path">Путь к каталогу, который нужно создать.</param>
        private void EnsureDirectoryExists(string path)
        {
            if (!Directory.Exists(path))
            {
                Log.LogMessage($"Creating directory at '{path}'");
                Directory.CreateDirectory(path);
            }
        }
    }
}
