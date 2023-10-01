<?php
namespace Avalonia;
use Avalonia\Platform\PlatformColorValues;
use System\Object;

/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ApplicationMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function add_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function add_PropertyChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function remove_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function remove_PropertyChanged_2($value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Item_1($property){}
	/**
	 * @return \Avalonia\Data\IBinding
	 */
	#[MethodOverride] public  function get_Item_2($binding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_2($binding, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_1($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_2($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_3($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_4($property){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_2($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_3($property){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_1($property, $value, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_2($property, $value, $priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_3($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_2($property, $value){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_1($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_2($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_3($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_4($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_5($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_6($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_7($property, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_1($property, $oldValue, $newValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_2($property, $oldValue, $newValue, $priority, $isEffectiveValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_2($property, $value){}
}
/**
 */
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
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_ResourcesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ResourcesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_UrlsOpened($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_UrlsOpened($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_ActualThemeVariantChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_ActualThemeVariantChanged($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_DataContext(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_DataContext($value){}
	/**
	 * @return \Avalonia\Styling\ThemeVariant
	 */
	public  function get_RequestedThemeVariant(){}
	/**
	 * @param \Avalonia\Styling\ThemeVariant $value
	 * @return \System\Void|void
	 */
	public  function set_RequestedThemeVariant($value){}
	/**
	 * @return \Avalonia\Styling\ThemeVariant
	 */
	public  function get_ActualThemeVariant(){}
	/**
	 * @return \Avalonia\Application
	 */
	public static function get_Current(){}
	/**
	 * @return \Avalonia\Controls\Templates\DataTemplates
	 */
	public  function get_DataTemplates(){}
	/**
	 * @return \Avalonia\Input\InputManager
	 */
	protected  function get_InputManager(){}
	/**
	 * @param \Avalonia\Input\InputManager $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_InputManager($value){}
	/**
	 * @return \Avalonia\Controls\IResourceDictionary
	 */
	public  function get_Resources(){}
	/**
	 * @param \Avalonia\Controls\IResourceDictionary $value
	 * @return \System\Void|void
	 */
	public  function set_Resources($value){}
	/**
	 * @return \Avalonia\Styling\Styles
	 */
	public  function get_Styles(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsDataTemplatesInitialized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasResources(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_StylingParent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsStylesInitialized(){}
	/**
	 * @return \Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime
	 */
	public  function get_ApplicationLifetime(){}
	/**
	 * @param \Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime $value
	 * @return \System\Void|void
	 */
	public  function set_ApplicationLifetime($value){}
	/**
	 * @return \Avalonia\Platform\IPlatformSettings
	 */
	public  function get_PlatformSettings(){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_GlobalStylesAdded($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_GlobalStylesAdded($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_GlobalStylesRemoved($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_GlobalStylesRemoved($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Initialize(){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object& $value
	 * @return \System\Boolean
	 */
	public  function TryGetResource($key, $theme, $value){}
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyHostedResourcesChanged($e){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StylesAdded($styles){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StylesRemoved($styles){}
	/**
	 * @return \System\Void|void
	 */
	public  function RegisterServices(){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnFrameworkInitializationCompleted(){}
	/**
	 * @param \System\String[] $urls
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RaiseUrlsOpened($urls){}
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyResourcesChanged($e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThisResourcesChanged($sender, $e){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Name($value){}

    /**
     * @param Object|object $sender
     * @param PlatformColorValues $e
     * @return void @deprecated
     * @deprecated this element should not be used by you because it will break your program
     */
	#[MethodPrivate]  function OnColorValuesChanged($sender, $e){}
	/**
	 * @uses ApplicationMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses ApplicationMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ApplicationMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses ApplicationMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ApplicationMethodsOverride::get_Item_1 ($property)
	 * @uses ApplicationMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ApplicationMethodsOverride::set_Item_1 ($property, $value)
	 * @uses ApplicationMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ApplicationMethodsOverride::ClearValue_1 ($property)
	 * @uses ApplicationMethodsOverride::ClearValue_2 ($property)
	 * @uses ApplicationMethodsOverride::ClearValue_3 ($property)
	 * @uses ApplicationMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses ApplicationMethodsOverride::GetValue_1 ($property)
	 * @uses ApplicationMethodsOverride::GetValue_2 ($property)
	 * @uses ApplicationMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ApplicationMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses ApplicationMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses ApplicationMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ApplicationMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses ApplicationMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses ApplicationMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses ApplicationMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses ApplicationMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses ApplicationMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses ApplicationMethodsOverride::Bind_5 ($property, $source)
	 * @uses ApplicationMethodsOverride::Bind_6 ($property, $source)
	 * @uses ApplicationMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ApplicationMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses ApplicationMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses ApplicationMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses ApplicationMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
