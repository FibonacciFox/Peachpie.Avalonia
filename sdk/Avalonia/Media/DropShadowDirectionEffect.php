<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DropShadowDirectionEffectMethodsOverride
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
class DropShadowDirectionEffect extends \Avalonia\Media\DropShadowEffectBase implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IAffectsRender,
	\Avalonia\Media\IDirectionDropShadowEffect,
	\Avalonia\Media\IDropShadowEffect,
	\Avalonia\Media\IEffect,
	\Avalonia\Media\IMutableEffect
{
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $ShadowDepthProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $DirectionProperty;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $ShadowDepth;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Direction;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $OffsetX;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $OffsetY;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $BlurRadius;
	/**
	 * @var \Avalonia\Media\Color
	 * @property
	 */
	public $Color;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Opacity;
	/**
	 * @var \Avalonia\Animation\Transitions
	 * @property
	 */
	public $Transitions;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Double|double
	 */
	public  function get_ShadowDepth(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_ShadowDepth($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Direction(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Direction($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_OffsetX(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_OffsetY(){}
	/**
	 * @return \Avalonia\Media\IImmutableEffect
	 */
	public  function ToImmutable(){}
	/**
	 * @uses DropShadowDirectionEffectMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses DropShadowDirectionEffectMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses DropShadowDirectionEffectMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses DropShadowDirectionEffectMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses DropShadowDirectionEffectMethodsOverride::get_Item_1 ($property)
	 * @uses DropShadowDirectionEffectMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses DropShadowDirectionEffectMethodsOverride::set_Item_1 ($property, $value)
	 * @uses DropShadowDirectionEffectMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses DropShadowDirectionEffectMethodsOverride::ClearValue_1 ($property)
	 * @uses DropShadowDirectionEffectMethodsOverride::ClearValue_2 ($property)
	 * @uses DropShadowDirectionEffectMethodsOverride::ClearValue_3 ($property)
	 * @uses DropShadowDirectionEffectMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses DropShadowDirectionEffectMethodsOverride::GetValue_1 ($property)
	 * @uses DropShadowDirectionEffectMethodsOverride::GetValue_2 ($property)
	 * @uses DropShadowDirectionEffectMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses DropShadowDirectionEffectMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses DropShadowDirectionEffectMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses DropShadowDirectionEffectMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses DropShadowDirectionEffectMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses DropShadowDirectionEffectMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses DropShadowDirectionEffectMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses DropShadowDirectionEffectMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses DropShadowDirectionEffectMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses DropShadowDirectionEffectMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses DropShadowDirectionEffectMethodsOverride::Bind_5 ($property, $source)
	 * @uses DropShadowDirectionEffectMethodsOverride::Bind_6 ($property, $source)
	 * @uses DropShadowDirectionEffectMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses DropShadowDirectionEffectMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses DropShadowDirectionEffectMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses DropShadowDirectionEffectMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses DropShadowDirectionEffectMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
