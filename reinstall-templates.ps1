dotnet new uninstall Peachpie.Avalonia.Templates
Remove-Item .nuget/**/*.nupkg
dotnet build
dotnet new install Peachpie.Avalonia.Templates