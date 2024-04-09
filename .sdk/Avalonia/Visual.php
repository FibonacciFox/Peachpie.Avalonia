<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait VisualOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs_1 $e [generic: Avalonia\Media\ITransform]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function RenderTransformChanged_1 ($e){}
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function RenderTransformChanged_2 ($sender, $e){}
	/**
	 * @deprecated
	 * @param \Avalonia\Visual $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SetVisualParent_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Collections\IList $children
	 * @param \Avalonia\Visual $parent
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function SetVisualParent_2 ($children, $parent){}
}
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
	use VisualOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Visual,Avalonia\Rect]
	 */
	public static $BoundsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $ClipToBoundsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Geometry]
	 */
	public static $ClipProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsVisibleProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $OpacityProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 */
	public static $OpacityMaskProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IEffect]
	 */
	public static $EffectProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Visual,System\Boolean]
	 */
	public static $HasMirrorTransformProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\ITransform]
	 */
	public static $RenderTransformProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativePoint]
	 */
	public static $RenderTransformOriginProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Media\FlowDirection]
	 */
	public static $FlowDirectionProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Visual,Avalonia\Visual]
	 */
	public static $VisualParentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Int32]
	 */
	public static $ZIndexProperty;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ClipToBounds;
	/**
	 * @property
	 * @var \Avalonia\Media\Geometry
	 */
	public $Clip;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEffectivelyVisible;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsVisible;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $OpacityMask;
	/**
	 * @property
	 * @var \Avalonia\Media\IEffect
	 */
	public $Effect;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $HasMirrorTransform;
	/**
	 * @property
	 * @var \Avalonia\Media\ITransform
	 */
	public $RenderTransform;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $RenderTransformOrigin;
	/**
	 * @property
	 * @var \Avalonia\Media\FlowDirection
	 */
	public $FlowDirection;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ZIndex;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property
	 * @var \Avalonia\Controls\Classes
	 * @since readonly
	 */
	public $Classes;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $DataContext;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInitialized;
	/**
	 * @property
	 * @var \Avalonia\Styling\Styles
	 * @since readonly
	 */
	public $Styles;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $StyleKey;
	/**
	 * @property
	 * @var \Avalonia\Controls\IResourceDictionary
	 */
	public $Resources;
	/**
	 * @property
	 * @var \Avalonia\AvaloniaObject
	 */
	public $TemplatedParent;
	/**
	 * @property
	 * @var \Avalonia\Styling\ControlTheme
	 */
	public $Theme;
	/**
	 * @property
	 * @var \Avalonia\StyledElement
	 * @since readonly
	 */
	public $Parent;
	/**
	 * @property
	 * @var \Avalonia\Styling\ThemeVariant
	 * @since readonly
	 */
	public $ActualThemeVariant;
	/**
	 * @property
	 * @var \Avalonia\Animation\Transitions
	 */
	public $Transitions;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \Avalonia\Rendering\Composition\CompositionDrawListVisual
	 */
	protected function CreateCompositionVisual($compositor){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @return \Avalonia\Rendering\Composition\CompositionVisual
	 */
	protected function AttachToCompositor($compositor){}
	/**
	 * @return \System\Void|void
	 */
	protected function DetachFromCompositor(){}
	/**
	 * @return \System\Void|void
	 */
	protected function SynchronizeCompositionChildVisuals(){}
	/**
	 * @return \System\Void|void
	 */
	protected function SynchronizeCompositionProperties(){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\VisualTreeAttachmentEventArgs]
	 * @return \System\Void|void
	 */
	public function add_AttachedToVisualTree($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\VisualTreeAttachmentEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_AttachedToVisualTree($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\VisualTreeAttachmentEventArgs]
	 * @return \System\Void|void
	 */
	public function add_DetachedFromVisualTree($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\VisualTreeAttachmentEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_DetachedFromVisualTree($value){}
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
	public function InvalidateVisual(){}
	/**
	 * @param \Avalonia\Media\DrawingContext $context
	 * @return \System\Void|void
	 */
	public function Render($context){}
	/**
	 * @param \Avalonia\AvaloniaProperty ...$properties
	 * @return \System\Void|void
	 */
	protected static function AffectsRender(...$properties){}
	/**
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnAttachedToVisualTreeCore($e){}
	/**
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnDetachedFromVisualTreeCore($e){}
	/**
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnAttachedToVisualTree($e){}
	/**
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnDetachedFromVisualTree($e){}
	/**
	 * @param \Avalonia\Visual $oldParent
	 * @param \Avalonia\Visual $newParent
	 * @return \System\Void|void
	 */
	protected function OnVisualParentChanged($oldParent, $newParent){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses VisualOverride::RenderTransformChanged_1 <br>private , args: ($e)<br>
	 * @uses VisualOverride::RenderTransformChanged_2 <br>private , args: ($sender, $e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function RenderTransformChanged (\override ...$args){}
	private static function ValidateVisualChild($c){}
	private static function ZIndexChanged($e){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses VisualOverride::SetVisualParent_1 <br>private , args: ($value)<br>
	 * @uses VisualOverride::SetVisualParent_2 <br>private , args: ($children, $parent)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function SetVisualParent (\override ...$args){}
	private function VisualChildrenChanged($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	protected function InvalidateMirrorTransform(){}
	private function get_IsAttachedToLogicalTree(){}
	private function get_LogicalParent(){}
	private function get_HasResources(){}
	private function get_IsStylesInitialized(){}
	private function get_StylingParent(){}
	private function NotifyAttachedToLogicalTree($e){}
	private function NotifyDetachedFromLogicalTree($e){}
	private function NotifyHostedResourcesChanged($e){}
	private function StylesAdded($styles){}
	private function StylesRemoved($styles){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}