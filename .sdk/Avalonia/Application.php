<?php
namespace Avalonia;
class Application extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\IDataContextProvider,
	\Avalonia\Controls\IGlobalDataTemplates,
	\Avalonia\Controls\Templates\IDataTemplateHost,
	\Avalonia\Styling\IGlobalStyles,
	\Avalonia\Styling\IStyleHost,
	\Avalonia\Styling\IThemeVariantHost,
	\Avalonia\Controls\IResourceHost,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Platform\IApplicationPlatformEvents
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Object]
	 */
	public static $DataContextProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Styling\ThemeVariant]
	 */
	public static $ActualThemeVariantProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Styling\ThemeVariant]
	 */
	public static $RequestedThemeVariantProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Application,System\String]
	 */
	public static $NameProperty;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $DataContext;
	/**
	 * @property
	 * @var \Avalonia\Styling\ThemeVariant
	 */
	public $RequestedThemeVariant;
	/**
	 * @property
	 * @var \Avalonia\Styling\ThemeVariant
	 * @since readonly
	 */
	public $ActualThemeVariant;
	/**
	 * @property
	 * @var \Avalonia\Application
	 * @since readonly
	 */
	public $Current;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\DataTemplates
	 * @since readonly
	 */
	public $DataTemplates;
	/**
	 * @property
	 * @var \Avalonia\Controls\IResourceDictionary
	 */
	public $Resources;
	/**
	 * @property
	 * @var \Avalonia\Styling\Styles
	 * @since readonly
	 */
	public $Styles;
	/**
	 * @property
	 * @var \Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime
	 */
	public $ApplicationLifetime;
	/**
	 * @property
	 * @var \Avalonia\Platform\IPlatformSettings
	 * @since readonly
	 */
	public $PlatformSettings;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ResourcesChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_ResourcesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\ResourcesChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_ResourcesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\UrlOpenedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_UrlsOpened($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\UrlOpenedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_UrlsOpened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_ActualThemeVariantChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_ActualThemeVariantChanged($value){}
	private function get_IsDataTemplatesInitialized(){}
	private function get_HasResources(){}
	private function get_StylingParent(){}
	private function get_IsStylesInitialized(){}
	private function add_GlobalStylesAdded($value){}
	private function remove_GlobalStylesAdded($value){}
	private function add_GlobalStylesRemoved($value){}
	private function remove_GlobalStylesRemoved($value){}
	/**
	 * @return \System\Void|void
	 */
	public function Initialize(){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetResource($key, $theme, &$value){}
	private function NotifyHostedResourcesChanged($e){}
	private function StylesAdded($styles){}
	private function StylesRemoved($styles){}
	/**
	 * @return \System\Void|void
	 */
	public function RegisterServices(){}
	/**
	 * @return \System\Void|void
	 */
	public function OnFrameworkInitializationCompleted(){}
	private function RaiseUrlsOpened($urls){}
	private function NotifyResourcesChanged($e){}
	private function ThisResourcesChanged($sender, $e){}
	private function OnColorValuesChanged($sender, $e){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}