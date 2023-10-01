<?php

namespace Application\Forms {

    use Avalonia\Data\Binding;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Collections\UxList;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxDataGrid;
    use Peachpie\Avalonia\Controls\UxStackPanel;
    use Peachpie\Avalonia\Controls\UxWindow;


    class Person extends \Peachpie\Avalonia\Core\DataTable {
        public function __construct(string $name, string $surname, bool $isTrue  )
        {
            $this["Name"] = $name;
            $this["Surname"] = $surname;
            $this["IsTrue"] = $isTrue;
        }
    }


    class Demo extends UxWindow
    {
        public UxButton $MyUxButton;
        public UxStackPanel $MyUxStackPanel;

        public UxDataGrid $Grid;

        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();

            $this->Grid = $this->FindByName("Grid");

            $list = new UxList();

            $list->Add(new Person("Fibonacci","Fox", true));
            $list->Add(new Person("Peachpie","Avalonia", false));
            $list->Add(new Person("Peachpie","Avalonia", false));
           

            $Name  =  new \Avalonia\Controls\DataGridTextColumn();
            $Name->Header = "Name";
            $Name->Binding = new Binding("[Name]");
            $this->Grid->Columns->Add($Name);

            $Surname  =  new \Avalonia\Controls\DataGridTextColumn();
            $Surname->Header = "Surname";
            $Surname->Binding = new Binding("[Surname]");
            $this->Grid->Columns->Add($Surname);

            $IsTrue  =  new \Avalonia\Controls\DataGridCheckBoxColumn();
            $IsTrue->Header = "IsTrue";
            $IsTrue->Binding = new Binding("[IsTrue]");
            $this->Grid->Columns->Add($IsTrue);

            $this->Grid->ItemsSource = $list;


            $this->on('Closing', function (UxWindow $demo, $e){
                $this->Hide();
                $e->Cancel = true;
            });


        }

        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}