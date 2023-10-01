<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait VisualMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function RenderTransformChanged_1($e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RenderTransformChanged_2($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetVisualParent_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function SetVisualParent_2($children, $parent){}
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
class Visual extends \Avalonia\StyledElement implements 
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
	 * @return \Avalonia\Rendering\Composition\CompositionDrawListVisual
	 */
	protected  function get_CompositionVisual(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionDrawListVisual $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_CompositionVisual($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionVisual
	 */
	protected  function get_ChildCompositionVisual(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $value
	 * @return \System\Void|void
	 */
	protected  function set_ChildCompositionVisual($value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \Avalonia\Rendering\Composition\CompositionDrawListVisual
	 */
	protected  function CreateCompositionVisual($compositor){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \Avalonia\Rendering\Composition\CompositionVisual
	 */
	protected  function AttachToCompositor($compositor){}
	/**
	 * @return \System\Void|void
	 */
	protected  function DetachFromCompositor(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SynchronizeCompositionChildVisuals(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SynchronizeCompositionProperties(){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_AttachedToVisualTree($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_AttachedToVisualTree($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_DetachedFromVisualTree($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_DetachedFromVisualTree($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Bounds(){}
	/**
	 * @param \Avalonia\Rect $value
	 * @return \System\Void|void
	 */
	protected  function set_Bounds($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ClipToBounds(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ClipToBounds($value){}
	/**
	 * @return \Avalonia\Media\Geometry
	 */
	public  function get_Clip(){}
	/**
	 * @param \Avalonia\Media\Geometry $value
	 * @return \System\Void|void
	 */
	public  function set_Clip($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEffectivelyVisible(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsVisible(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsVisible($value){}
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
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_OpacityMask(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_OpacityMask($value){}
	/**
	 * @return \Avalonia\Media\IEffect
	 */
	public  function get_Effect(){}
	/**
	 * @param \Avalonia\Media\IEffect $value
	 * @return \System\Void|void
	 */
	public  function set_Effect($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasMirrorTransform(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_HasMirrorTransform($value){}
	/**
	 * @return \Avalonia\Media\ITransform
	 */
	public  function get_RenderTransform(){}
	/**
	 * @param \Avalonia\Media\ITransform $value
	 * @return \System\Void|void
	 */
	public  function set_RenderTransform($value){}
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_RenderTransformOrigin(){}
	/**
	 * @param \Avalonia\RelativePoint $value
	 * @return \System\Void|void
	 */
	public  function set_RenderTransformOrigin($value){}
	/**
	 * @return \Avalonia\Media\FlowDirection
	 */
	public  function get_FlowDirection(){}
	/**
	 * @param \Avalonia\Media\FlowDirection $value
	 * @return \System\Void|void
	 */
	public  function set_FlowDirection($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ZIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_ZIndex($value){}
	/**
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	protected  function get_VisualChildren(){}
	/**
	 * @param \Avalonia\Collections\IAvaloniaList_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_VisualChildren($value){}
	/**
	 * @return \Avalonia\Rendering\IRenderRoot
	 */
	protected  function get_VisualRoot(){}
	/**
	 * @return \Avalonia\Media\RenderOptions
	 */
	protected  function get_RenderOptions(){}
	/**
	 * @param \Avalonia\Media\RenderOptions $value
	 * @return \System\Void|void
	 */
	protected  function set_RenderOptions($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasNonUniformZIndexChildren(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_HasNonUniformZIndexChildren($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsAttachedToVisualTree(){}
	/**
	 * @return \Avalonia\Visual
	 */
	protected  function get_VisualParent(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_BypassFlowDirectionPolicies(){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \Avalonia\Media\FlowDirection
	 */
	public static function GetFlowDirection($visual){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @param \Avalonia\Media\FlowDirection $value
	 * @return \System\Void|void
	 */
	public static function SetFlowDirection($visual, $value){}
	/**
	 * @return \System\Void|void
	 */
	public  function InvalidateVisual(){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @return \System\Void|void
	 */
	public  function Render($context){}
	/**
	 * @param \Avalonia\AvaloniaProperty[] $properties
	 * @return \System\Void|void
	 */
	protected static function AffectsRender($properties){}
	/**
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnAttachedToVisualTreeCore($e){}
	/**
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnDetachedFromVisualTreeCore($e){}
	/**
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnAttachedToVisualTree($e){}
	/**
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnDetachedFromVisualTree($e){}
	/**
	 * @param \Avalonia\Visual $oldParent
	 * @param \Avalonia\Visual $newParent
	 * @return \System\Void|void
	 */
	protected  function OnVisualParentChanged($oldParent, $newParent){}
	/**
	 * @uses VisualMethodsOverride::RenderTransformChanged_1 ($e)
	 * @uses VisualMethodsOverride::RenderTransformChanged_2 ($sender, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RenderTransformChanged(mixed ...$args){}
	/**
	 * @param \Avalonia\Visual $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateVisualChild($c){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ZIndexChanged($e){}
	/**
	 * @uses VisualMethodsOverride::SetVisualParent_1 ($value)
	 * @uses VisualMethodsOverride::SetVisualParent_2 ($children, $parent)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetVisualParent(mixed ...$args){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function VisualChildrenChanged($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InvalidateMirrorTransform(){}
	/**
	 * @uses VisualMethodsOverride::get_Classes_1 ()
	 * @uses VisualMethodsOverride::get_Classes_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Classes(mixed ...$args){}
	/**
	 * @uses VisualMethodsOverride::get_LogicalChildren_1 ()
	 * @uses VisualMethodsOverride::get_LogicalChildren_2 ()
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
	 * @uses VisualMethodsOverride::SetParent_1 ($parent)
	 * @uses VisualMethodsOverride::SetParent_2 ($parent)
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
	 * @uses VisualMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses VisualMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses VisualMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses VisualMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses VisualMethodsOverride::get_Item_1 ($property)
	 * @uses VisualMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses VisualMethodsOverride::set_Item_1 ($property, $value)
	 * @uses VisualMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses VisualMethodsOverride::ClearValue_1 ($property)
	 * @uses VisualMethodsOverride::ClearValue_2 ($property)
	 * @uses VisualMethodsOverride::ClearValue_3 ($property)
	 * @uses VisualMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses VisualMethodsOverride::GetValue_1 ($property)
	 * @uses VisualMethodsOverride::GetValue_2 ($property)
	 * @uses VisualMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses VisualMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses VisualMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses VisualMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses VisualMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses VisualMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses VisualMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses VisualMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses VisualMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses VisualMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses VisualMethodsOverride::Bind_5 ($property, $source)
	 * @uses VisualMethodsOverride::Bind_6 ($property, $source)
	 * @uses VisualMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses VisualMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses VisualMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses VisualMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses VisualMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
