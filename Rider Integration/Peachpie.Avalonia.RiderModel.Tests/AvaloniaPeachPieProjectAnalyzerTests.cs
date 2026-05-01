using Xunit;
using Peachpie.Avalonia.RiderModel.Axaml;

namespace Peachpie.Avalonia.RiderModel.Tests;

public sealed class AvaloniaPeachPieProjectAnalyzerTests
{
    [Fact]
    public void Analyzer_ResolvesXClassDataTypeAndBindings_ForMvvmSample()
    {
        var repoRoot = FindRepositoryRoot();
        var sampleRoot = Path.Combine(repoRoot, "Samples", "MVVM");

        var analyzer = new AvaloniaPeachPieProjectAnalyzer();
        var result = analyzer.Analyze(sampleRoot);

        Assert.Contains(result.NavigationTargets, x => x.Kind == "x:Class" && x.Symbol == "Views.AddItemView");
        Assert.Contains(result.NavigationTargets, x => x.Kind == "x:DataType" && x.Symbol == "ViewModels.AddItemViewModel");
        Assert.Contains(result.NavigationTargets, x => x.Kind == "binding-method" && x.Symbol.EndsWith(".Cancel"));
        Assert.Contains(result.NavigationTargets, x => x.Kind == "binding-method" && x.Symbol.EndsWith(".Ok"));
        Assert.Contains(result.NavigationTargets, x => x.Kind == "binding-property" && x.Symbol.EndsWith(".get_Description"));
        Assert.DoesNotContain(result.Diagnostics, x => x.FilePath.EndsWith("AddItemView.axaml", StringComparison.OrdinalIgnoreCase));
    }

    [Fact]
    public void Analyzer_ReportsUnknownBinding()
    {
        using var temp = new TempDirectory();
        var root = temp.Path;
        Directory.CreateDirectory(Path.Combine(root, "Views"));
        Directory.CreateDirectory(Path.Combine(root, "ViewModels"));

        File.WriteAllText(Path.Combine(root, "Views", "TestView.php"), """
<?php
namespace Views;
class TestView {}
""");

        File.WriteAllText(Path.Combine(root, "ViewModels", "TestViewModel.php"), """
<?php
namespace ViewModels;
class TestViewModel
{
    public function Ok(): void {}
}
""");

        File.WriteAllText(Path.Combine(root, "Views", "TestView.axaml"), """
<UserControl xmlns="https://github.com/avaloniaui"
             xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
             xmlns:vm="using:ViewModels"
             x:Class="Views.TestView"
             x:DataType="vm:TestViewModel">
  <Button Command="{Binding MissingCommand}" />
</UserControl>
""");

        var analyzer = new AvaloniaPeachPieProjectAnalyzer();
        var result = analyzer.Analyze(root);

        Assert.Contains(result.Diagnostics, x => x.Code == "AXAML003" && x.Message.Contains("MissingCommand", StringComparison.Ordinal));
    }

    [Fact]
    public void Analyzer_ResolvesBindingsInsideDataTemplate_ForMvvmSample()
    {
        var repoRoot = FindRepositoryRoot();
        var sampleRoot = Path.Combine(repoRoot, "Samples", "MVVM");

        var analyzer = new AvaloniaPeachPieProjectAnalyzer();
        var result = analyzer.Analyze(sampleRoot);

        Assert.Contains(result.NavigationTargets, x => x.Kind == "binding-property" && x.Symbol == "Models.TodoItem.get_IsChecked");
        Assert.Contains(result.NavigationTargets, x => x.Kind == "binding-property" && x.Symbol == "Models.TodoItem.get_Description");
        Assert.DoesNotContain(result.Diagnostics, x => x.FilePath.EndsWith("ToDoListView.axaml", StringComparison.OrdinalIgnoreCase) && x.Code == "AXAML003");
    }

    [Fact]
    public void QueryService_ReturnsNavigationAndCompletion_ForMvvmSample()
    {
        var repoRoot = FindRepositoryRoot();
        var sampleRoot = Path.Combine(repoRoot, "Samples", "MVVM");

        var analyzer = new AvaloniaPeachPieProjectAnalyzer();
        var result = analyzer.Analyze(sampleRoot);
        var service = new AxamlIndexQueryService();

        var addItemView = Path.Combine(sampleRoot, "Views", "AddItemView.axaml");
        var navigation = service.FindNavigationTargets(result, addItemView, 17);
        var completions = service.GetBindingCompletions(result, addItemView, 19, "D");

        Assert.Contains(navigation, x => x.Kind == "binding-method" && x.Symbol == "ViewModels.AddItemViewModel.Ok");
        Assert.Single(completions);
        Assert.Contains(completions, x => x.Kind == "property" && x.Symbol == "ViewModels.AddItemViewModel.get_Description");
    }

    private static string FindRepositoryRoot()
    {
        var current = AppContext.BaseDirectory;
        while (!string.IsNullOrWhiteSpace(current))
        {
            if (File.Exists(Path.Combine(current, "Peachpie.Avalonia.sln")))
            {
                return current;
            }

            current = Directory.GetParent(current)?.FullName ?? string.Empty;
        }

        throw new InvalidOperationException("Repository root was not found.");
    }
}
