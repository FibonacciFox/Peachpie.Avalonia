<?php
namespace Avalonia\Layout;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LayoutableMethodsOverride
{
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
class Layoutable extends \Avalonia\Visual implements 
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
	\Avalonia\INamed
{
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_EffectiveViewportChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_EffectiveViewportChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_LayoutUpdated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_LayoutUpdated($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function UpdateLayout(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Width(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Width($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Height(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Height($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MinWidth(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MinWidth($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MaxWidth(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MaxWidth($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MinHeight(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MinHeight($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MaxHeight(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MaxHeight($value){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_Margin(){}
	/**
	 * @param \Avalonia\Thickness $value
	 * @return \System\Void|void
	 */
	public  function set_Margin($value){}
	/**
	 * @return \Avalonia\Layout\HorizontalAlignment
	 */
	public  function get_HorizontalAlignment(){}
	/**
	 * @param \Avalonia\Layout\HorizontalAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_HorizontalAlignment($value){}
	/**
	 * @return \Avalonia\Layout\VerticalAlignment
	 */
	public  function get_VerticalAlignment(){}
	/**
	 * @param \Avalonia\Layout\VerticalAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_VerticalAlignment($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_DesiredSize(){}
	/**
	 * @param \Avalonia\Size $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_DesiredSize($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMeasureValid(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsMeasureValid($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsArrangeValid(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsArrangeValid($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UseLayoutRounding(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_UseLayoutRounding($value){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function get_PreviousMeasure(){}
	/**
	 * @return \System\Nullable_1
	 */
	protected  function get_PreviousArrange(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ApplyTemplate(){}
	/**
	 * @param \Avalonia\Size $availableSize
	 * @return \System\Void|void
	 */
	public  function Measure($availableSize){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public  function Arrange($rect){}
	/**
	 * @return \System\Void|void
	 */
	public  function InvalidateMeasure(){}
	/**
	 * @return \System\Void|void
	 */
	public  function InvalidateArrange(){}
	/**
	 * @param \Avalonia\Layout\Layoutable $control
	 * @return \System\Void|void
	 */
	protected  function ChildDesiredSizeChanged($control){}
	/**
	 * @param \Avalonia\Layout\EffectiveViewportChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function RaiseEffectiveViewportChanged($e){}
	/**
	 * @param \Avalonia\AvaloniaProperty[] $properties
	 * @return \System\Void|void
	 */
	protected static function AffectsMeasure($properties){}
	/**
	 * @param \Avalonia\AvaloniaProperty[] $properties
	 * @return \System\Void|void
	 */
	protected static function AffectsArrange($properties){}
	/**
	 * @param \Avalonia\Size $availableSize
	 * @return \Avalonia\Size
	 */
	protected  function MeasureCore($availableSize){}
	/**
	 * @param \Avalonia\Size $availableSize
	 * @return \Avalonia\Size
	 */
	protected  function MeasureOverride($availableSize){}
	/**
	 * @param \Avalonia\Rect $finalRect
	 * @return \System\Void|void
	 */
	protected  function ArrangeCore($finalRect){}
	/**
	 * @param \Avalonia\Size $finalSize
	 * @return \Avalonia\Size
	 */
	protected  function ArrangeOverride($finalSize){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnMeasureInvalidated(){}
	/**
	 * @param \Avalonia\Layout\ILayoutManager $layoutManager
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AncestorBecameVisible($layoutManager){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LayoutManagedLayoutUpdated($sender, $e){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInvalidRect($rect){}
	/**
	 * @param \Avalonia\Size $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInvalidSize($size){}
	/**
	 * @param \Avalonia\Size $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NonNegative($size){}
	/**
	 * @uses LayoutableMethodsOverride::get_Classes_1 ()
	 * @uses LayoutableMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses LayoutableMethodsOverride::get_LogicalChildren_1 ()
	 * @uses LayoutableMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses LayoutableMethodsOverride::SetParent_1 ($parent)
	 * @uses LayoutableMethodsOverride::SetParent_2 ($parent)
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
	 * @uses LayoutableMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses LayoutableMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses LayoutableMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses LayoutableMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses LayoutableMethodsOverride::get_Item_1 ($property)
	 * @uses LayoutableMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses LayoutableMethodsOverride::set_Item_1 ($property, $value)
	 * @uses LayoutableMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses LayoutableMethodsOverride::ClearValue_1 ($property)
	 * @uses LayoutableMethodsOverride::ClearValue_2 ($property)
	 * @uses LayoutableMethodsOverride::ClearValue_3 ($property)
	 * @uses LayoutableMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses LayoutableMethodsOverride::GetValue_1 ($property)
	 * @uses LayoutableMethodsOverride::GetValue_2 ($property)
	 * @uses LayoutableMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses LayoutableMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses LayoutableMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses LayoutableMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses LayoutableMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses LayoutableMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses LayoutableMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses LayoutableMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses LayoutableMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses LayoutableMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses LayoutableMethodsOverride::Bind_5 ($property, $source)
	 * @uses LayoutableMethodsOverride::Bind_6 ($property, $source)
	 * @uses LayoutableMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses LayoutableMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses LayoutableMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses LayoutableMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses LayoutableMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
