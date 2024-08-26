using System;
using System.Diagnostics;
using System.IO;
using Microsoft.Build.Utilities;
using Newtonsoft.Json.Linq;

namespace Peachpie.Vendor.Stubs
{
    /// <summary>
    /// Класс <c>PackageStubsRestore</c> отвечает за обработку списка NuGet пакетов,
    /// поиск PHP файлов в соответствующих директориях и копирование их в структуру стубов.
    /// </summary>
    /// <summary>
    /// The <c>PackageStubsRestore</c> class handles the processing of NuGet package lists,
    /// searching for PHP files in the respective directories, and copying them into the stubs structure.
    /// </summary>
    public class PackageStubsRestore : Task
    {
        /// <summary>
        /// Директория, куда будут копироваться файлы PHP для использования в проекте.
        /// </summary>
        /// <summary>
        /// The directory where PHP files will be copied for use in the project.
        /// </summary>
        public string StubsDirectory { get; set; }

        /// <summary>
        /// Шаблон пути, используемый для поиска PHP файлов в локальном репозитории NuGet.
        /// </summary>
        /// <summary>
        /// The path pattern used to search for PHP files in the local NuGet repository.
        /// </summary>
        public string NugetPackagePathPattern { get; set; }

        /// <summary>
        /// Основной метод, выполняющий задачу. Он удаляет и создает каталоги стубов,
        /// запускает команду <c>dotnet list package</c>, обрабатывает полученные данные
        /// и копирует файлы PHP в соответствующие каталоги.
        /// </summary>
        /// <returns>Возвращает <c>true</c>, если задача выполнена успешно, иначе <c>false</c>.</returns>
        /// <summary>
        /// The main method that performs the task. It deletes and creates stub directories,
        /// runs the <c>dotnet list package</c> command, processes the retrieved data,
        /// and copies PHP files to the corresponding directories.
        /// </summary>
        /// <returns>Returns <c>true</c> if the task is successful, otherwise <c>false</c>.</returns>
        public override bool Execute()
        {
            try
            {
                DeleteAndCreateDirectory(StubsDirectory);

                string output = RunDotnetListPackage();

                if (string.IsNullOrEmpty(output))
                {
                    Log.LogError("No output from dotnet list package command.");
                    return false;
                }

                var packages = JObject.Parse(output);
                ProcessPackages(packages);

                return true;
            }
            catch (Exception ex)
            {
                Log.LogError($"An error occurred: {ex.Message}\n{ex.StackTrace}");
                return false;
            }
        }

        /// <summary>
        /// Удаляет каталог, если он существует, и затем создает его заново.
        /// </summary>
        /// <param name="path">Путь к каталогу, который нужно удалить и создать заново.</param>
        /// <summary>
        /// Deletes the directory if it exists and then creates it anew.
        /// </summary>
        /// <param name="path">The path to the directory to delete and recreate.</param>
        private void DeleteAndCreateDirectory(string path)
        {
            if (Directory.Exists(path))
            {
                Directory.Delete(path, true);
            }
            Directory.CreateDirectory(path);
        }

        /// <summary>
        /// Выполняет команду <c>dotnet list package</c> и возвращает её вывод в виде строки.
        /// </summary>
        /// <returns>Вывод команды <c>dotnet list package</c> в формате JSON.</returns>
        /// <summary>
        /// Executes the <c>dotnet list package</c> command and returns its output as a string.
        /// </summary>
        /// <returns>The output of the <c>dotnet list package</c> command in JSON format.</returns>
        private string RunDotnetListPackage()
        {
            var startInfo = new ProcessStartInfo
            {
                FileName = "dotnet",
                Arguments = "list package --include-transitive --format json",
                RedirectStandardOutput = true,
                RedirectStandardError = true,
                UseShellExecute = false,
                CreateNoWindow = true,
            };

            using var process = new Process { StartInfo = startInfo };
            process.Start();

            var output = process.StandardOutput.ReadToEnd();
            var error = process.StandardError.ReadToEnd();
            process.WaitForExit();

            if (!string.IsNullOrEmpty(error))
            {
                Log.LogError($"dotnet list package error: {error}");
            }

            return output;
        }

        /// <summary>
        /// Обрабатывает JSON, содержащий информацию о пакетах, и копирует файлы PHP из пакетов
        /// в соответствующие каталоги стубов.
        /// </summary>
        /// <param name="packages">Объект JSON, содержащий информацию о пакетах и их версиях.</param>
        /// <summary>
        /// Processes the JSON containing package information and copies PHP files from the packages
        /// to the corresponding stub directories.
        /// </summary>
        /// <param name="packages">The JSON object containing package information and their versions.</param>
        private void ProcessPackages(JObject packages)
        {
            foreach (var project in packages["projects"].Children<JObject>())
            {
                foreach (var framework in project["frameworks"].Children<JObject>())
                {
                    // Обработка topLevelPackages
                    // Processing topLevelPackages
                    foreach (var package in framework["topLevelPackages"].Children<JObject>())
                    {
                        ProcessPackage(package);
                    }

                    // Обработка transitivePackages
                    // Processing transitivePackages
                    foreach (var package in framework["transitivePackages"].Children<JObject>())
                    {
                        ProcessPackage(package);
                    }
                }
            }
        }

        /// <summary>
        /// Обрабатывает отдельный пакет, определяя его идентификатор и версию, и затем ищет
        /// и копирует PHP файлы из указанного пути пакета в каталог стубов.
        /// </summary>
        /// <param name="package">Объект JSON, содержащий информацию о пакете.</param>
        /// <summary>
        /// Processes a single package, determines its ID and version, and then searches
        /// and copies PHP files from the package's specified path to the stub directory.
        /// </summary>
        /// <param name="package">The JSON object containing information about the package.</param>
        private void ProcessPackage(JObject package)
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
                Log.LogMessage($"Package '{packageId}' located in '{nugetPackagePath}' does not contain PHP stubs.");
            }
        }

        /// <summary>
        /// Копирует файлы PHP из исходного каталога в каталог стубов.
        /// </summary>
        /// <param name="sourcePath">Исходный каталог, в котором ищутся файлы PHP.</param>
        /// <param name="destinationPath">Каталог назначения, куда копируются файлы PHP.</param>
        /// <summary>
        /// Copies PHP files from the source directory to the stub directory.
        /// </summary>
        /// <param name="sourcePath">The source directory where PHP files are searched.</param>
        /// <param name="destinationPath">The destination directory where PHP files are copied.</param>
        private void ProcessFiles(string sourcePath, string destinationPath)
        {
            foreach (var file in Directory.GetFiles(sourcePath, "*.php", SearchOption.AllDirectories))
            {
                var relativePath = Path.GetRelativePath(sourcePath, file);
                var destFile = Path.Combine(destinationPath, relativePath);

                EnsureDirectoryExists(Path.GetDirectoryName(destFile));
                File.Copy(file, destFile, overwrite: true);
            }
        }

        /// <summary>
        /// Проверяет, существует ли каталог, и создает его, если он не существует.
        /// </summary>
        /// <param name="path">Путь к каталогу, который нужно создать.</param>
        /// <summary>
        /// Checks if the directory exists and creates it if it does not.
        /// </summary>
        /// <param name="path">The path to the directory to create.</param>
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
