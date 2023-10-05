<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExperimentalAcrylicMaterialMethodsOverride
{
	/**
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride] public  function get_TintColor_1(){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride] private  function get_TintColor_2(){}
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
class ExperimentalAcrylicMaterial extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IMutableExperimentalAcrylicMaterial,
	\Avalonia\Media\IExperimentalAcrylicMaterial
{
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Color]
	 * @field
	 */
	public readonly $TintColorProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\AcrylicBackgroundSource]
	 * @field
	 */
	public readonly $BackgroundSourceProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $TintOpacityProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $MaterialOpacityProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $PlatformTransparencyCompensationLevelProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Color]
	 * @field
	 */
	public readonly $FallbackColorProperty;
	/**
	 * @var \Avalonia\Media\AcrylicBackgroundSource
	 * @property
	 */
	public $BackgroundSource;
	/**
	 * @var \Avalonia\Media\Color
	 * @property
	 */
	public $TintColor;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $TintOpacity;
	/**
	 * @var \Avalonia\Media\Color
	 * @property
	 */
	public $FallbackColor;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $MaterialOpacity;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $PlatformTransparencyCompensationLevel;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Invalidated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Invalidated($value){}
	/**
	 * @return \Avalonia\Media\AcrylicBackgroundSource
	 */
	public  function get_BackgroundSource(){}
	/**
	 * @param \Avalonia\Media\AcrylicBackgroundSource $value
	 * @return \System\Void|void
	 */
	public  function set_BackgroundSource($value){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::get_TintColor_1 ()
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::get_TintColor_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_TintColor(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\Color $value
	 * @return \System\Void|void
	 */
	public  function set_TintColor($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_TintOpacity(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_TintOpacity($value){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_FallbackColor(){}
	/**
	 * @param \Avalonia\Media\Color $value
	 * @return \System\Void|void
	 */
	public  function set_FallbackColor($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MaterialOpacity(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MaterialOpacity($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_PlatformTransparencyCompensationLevel(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_PlatformTransparencyCompensationLevel($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_MaterialColor(){}
	/**
	 * @param \Avalonia\Media\Color $tintColor
	 * @param \System\Double|double $tintOpacity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEffectiveTintColor($tintColor, $tintOpacity){}
	/**
	 * @param \Avalonia\Media\Color $tintColor
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTintOpacityModifier($tintColor){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEffectiveLuminosityColor(){}
	/**
	 * @param \System\Double|double $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Trim($value){}
	/**
	 * @param \Avalonia\Media\Color $color
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RGBMax($color){}
	/**
	 * @param \Avalonia\Media\Color $color
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RGBMin($color){}
	/**
	 * @param \System\Nullable_1 $luminosityOpacity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetLuminosityColor($luminosityOpacity){}
	/**
	 * @param \Avalonia\AvaloniaProperty[] $properties
	 * @return \System\Void|void
	 */
	protected static function AffectsRender($properties){}
	/**
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected  function RaiseInvalidated($e){}
	/**
	 * @return \Avalonia\Media\IExperimentalAcrylicMaterial
	 */
	public  function ToImmutable(){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::get_Item_1 ($property)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::set_Item_1 ($property, $value)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::ClearValue_1 ($property)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::ClearValue_2 ($property)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::ClearValue_3 ($property)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::GetValue_1 ($property)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::GetValue_2 ($property)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::Bind_5 ($property, $source)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::Bind_6 ($property, $source)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses ExperimentalAcrylicMaterialMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
