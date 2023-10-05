<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DrawingGroupMethodsOverride
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
class DrawingGroup extends \Avalonia\Media\Drawing implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $OpacityProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Transform]
	 * @field
	 */
	public readonly $TransformProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Geometry]
	 * @field
	 */
	public readonly $ClipGeometryProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 * @field
	 */
	public readonly $OpacityMaskProperty;
	/**
	 * @var \Avalonia\DirectProperty_2[Avalonia\Media\DrawingGroup,Avalonia\Media\DrawingCollection]
	 * @field
	 */
	public readonly $ChildrenProperty;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Opacity;
	/**
	 * @var \Avalonia\Media\Transform
	 * @property
	 */
	public $Transform;
	/**
	 * @var \Avalonia\Media\Geometry
	 * @property
	 */
	public $ClipGeometry;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $OpacityMask;
	/**
	 * @var \Avalonia\Media\DrawingCollection
	 * @property
	 */
	public $Children;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Double|double
	 */
	public  function get_Opacity(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Opacity($value){}
	/**
	 * @return \Avalonia\Media\Transform
	 */
	public  function get_Transform(){}
	/**
	 * @param \Avalonia\Media\Transform $value
	 * @return \System\Void|void
	 */
	public  function set_Transform($value){}
	/**
	 * @return \Avalonia\Media\Geometry
	 */
	public  function get_ClipGeometry(){}
	/**
	 * @param \Avalonia\Media\Geometry $value
	 * @return \System\Void|void
	 */
	public  function set_ClipGeometry($value){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_OpacityMask(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_OpacityMask($value){}
	/**
	 * @return \Avalonia\Media\DrawingCollection
	 */
	public  function get_Children(){}
	/**
	 * @param \Avalonia\Media\DrawingCollection $value
	 * @return \System\Void|void
	 */
	public  function set_Children($value){}
	/**
	 * @return \Avalonia\Media\DrawingContext
	 */
	public  function Open(){}
	/**
	 * @uses DrawingGroupMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses DrawingGroupMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses DrawingGroupMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses DrawingGroupMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses DrawingGroupMethodsOverride::get_Item_1 ($property)
	 * @uses DrawingGroupMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses DrawingGroupMethodsOverride::set_Item_1 ($property, $value)
	 * @uses DrawingGroupMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses DrawingGroupMethodsOverride::ClearValue_1 ($property)
	 * @uses DrawingGroupMethodsOverride::ClearValue_2 ($property)
	 * @uses DrawingGroupMethodsOverride::ClearValue_3 ($property)
	 * @uses DrawingGroupMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses DrawingGroupMethodsOverride::GetValue_1 ($property)
	 * @uses DrawingGroupMethodsOverride::GetValue_2 ($property)
	 * @uses DrawingGroupMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses DrawingGroupMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses DrawingGroupMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses DrawingGroupMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses DrawingGroupMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses DrawingGroupMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses DrawingGroupMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses DrawingGroupMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses DrawingGroupMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses DrawingGroupMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses DrawingGroupMethodsOverride::Bind_5 ($property, $source)
	 * @uses DrawingGroupMethodsOverride::Bind_6 ($property, $source)
	 * @uses DrawingGroupMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses DrawingGroupMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses DrawingGroupMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses DrawingGroupMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses DrawingGroupMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
