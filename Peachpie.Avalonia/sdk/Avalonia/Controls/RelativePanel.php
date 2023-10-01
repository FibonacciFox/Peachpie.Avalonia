<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RelativePanelMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddHandler_1($routedEvent, $handler, $routes, $handledEventsToo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddHandler_2($routedEvent, $handler, $routes, $handledEventsToo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveHandler_1($routedEvent, $handler){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveHandler_2($routedEvent, $handler){}
	/**
	 * @return \Avalonia\Controls\Classes
	 */
	#[MethodOverride] public  function get_Classes_1(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride] private  function get_Classes_2(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	#[MethodOverride] protected  function get_LogicalChildren_1(){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaReadOnlyList_1
	 */
	#[MethodOverride] private  function get_LogicalChildren_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetParent_1($parent){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetParent_2($parent){}
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
class RelativePanel extends \Avalonia\Controls\Panel implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\IDataContextProvider,
	\Avalonia\LogicalTree\ILogical,
	\Avalonia\Styling\IThemeVariantHost,
	\Avalonia\Controls\IResourceHost,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Styling\IStyleHost,
	\Avalonia\Controls\ISetLogicalParent,
	\Avalonia\Controls\ISetInheritanceParent,
	\System\ComponentModel\ISupportInitialize,
	\Avalonia\Styling\IStyleable,
	\Avalonia\INamed,
	\Avalonia\Input\IInputElement,
	\Avalonia\Controls\Templates\IDataTemplateHost,
	\Avalonia\Rendering\IVisualBrushInitialize,
	\Avalonia\Styling\ISetterValue,
	\Avalonia\LogicalTree\IChildIndexProvider
{
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Object|object
	 */
	public static function GetAbove($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetAbove($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Boolean
	 */
	public static function GetAlignBottomWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetAlignBottomWithPanel($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Object|object
	 */
	public static function GetAlignBottomWith($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetAlignBottomWith($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Boolean
	 */
	public static function GetAlignHorizontalCenterWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetAlignHorizontalCenterWithPanel($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Object|object
	 */
	public static function GetAlignHorizontalCenterWith($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetAlignHorizontalCenterWith($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Boolean
	 */
	public static function GetAlignLeftWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetAlignLeftWithPanel($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Object|object
	 */
	public static function GetAlignLeftWith($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetAlignLeftWith($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Boolean
	 */
	public static function GetAlignRightWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetAlignRightWithPanel($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Object|object
	 */
	public static function GetAlignRightWith($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetAlignRightWith($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Boolean
	 */
	public static function GetAlignTopWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetAlignTopWithPanel($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Object|object
	 */
	public static function GetAlignTopWith($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetAlignTopWith($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Boolean
	 */
	public static function GetAlignVerticalCenterWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetAlignVerticalCenterWithPanel($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Object|object
	 */
	public static function GetAlignVerticalCenterWith($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetAlignVerticalCenterWith($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Object|object
	 */
	public static function GetBelow($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetBelow($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Object|object
	 */
	public static function GetLeftOf($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetLeftOf($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @return \System\Object|object
	 */
	public static function GetRightOf($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function SetRightOf($obj, $value){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\AvaloniaObject $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDependencyElement($property, $child){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_ChildIndexChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_ChildIndexChanged($value){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $child
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetChildIndex($child){}
	/**
	 * @param \System\Int32& $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetTotalCount($count){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsDataTemplatesInitialized(){}
	/**
	 * @param \Avalonia\Styling\SetterBase $setter
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($setter){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureInitialized(){}
	/**
	 * @uses RelativePanelMethodsOverride::AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @uses RelativePanelMethodsOverride::AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddHandler(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::RemoveHandler_1 ($routedEvent, $handler)
	 * @uses RelativePanelMethodsOverride::RemoveHandler_2 ($routedEvent, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveHandler(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::get_Classes_1 ()
	 * @uses RelativePanelMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::get_LogicalChildren_1 ()
	 * @uses RelativePanelMethodsOverride::get_LogicalChildren_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_LogicalChildren(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsAttachedToLogicalTree(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LogicalParent(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasResources(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsStylesInitialized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_StylingParent(){}
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyAttachedToLogicalTree($e){}
	/**
	 * @param \Avalonia\LogicalTree\LogicalTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyDetachedFromLogicalTree($e){}
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyResourcesChanged($e){}
	/**
	 * @param \Avalonia\Controls\ResourcesChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NotifyHostedResourcesChanged($e){}
	/**
	 * @uses RelativePanelMethodsOverride::SetParent_1 ($parent)
	 * @uses RelativePanelMethodsOverride::SetParent_2 ($parent)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetParent(mixed ...$args){}
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
	 * @uses RelativePanelMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses RelativePanelMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses RelativePanelMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::get_Item_1 ($property)
	 * @uses RelativePanelMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::set_Item_1 ($property, $value)
	 * @uses RelativePanelMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::ClearValue_1 ($property)
	 * @uses RelativePanelMethodsOverride::ClearValue_2 ($property)
	 * @uses RelativePanelMethodsOverride::ClearValue_3 ($property)
	 * @uses RelativePanelMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::GetValue_1 ($property)
	 * @uses RelativePanelMethodsOverride::GetValue_2 ($property)
	 * @uses RelativePanelMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses RelativePanelMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses RelativePanelMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses RelativePanelMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses RelativePanelMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses RelativePanelMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses RelativePanelMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses RelativePanelMethodsOverride::Bind_5 ($property, $source)
	 * @uses RelativePanelMethodsOverride::Bind_6 ($property, $source)
	 * @uses RelativePanelMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses RelativePanelMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses RelativePanelMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses RelativePanelMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses RelativePanelMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
