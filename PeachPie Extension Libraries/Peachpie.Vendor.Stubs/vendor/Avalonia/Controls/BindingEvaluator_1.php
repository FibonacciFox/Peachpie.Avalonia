<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BindingEvaluator_1Override {
	/**
	 * @deprecated
	 * @param \System\Object|object $o
	 * @param \System\Boolean|bool $clearDataContext
	 * @return \T|object
	 */
	#[MethodOverride]public function GetDynamicValue_1 ($o, $clearDataContext){}
	/**
	 * @deprecated
	 * @param \System\Object|object $o
	 * @return \T|object
	 */
	#[MethodOverride]public function GetDynamicValue_2 ($o){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Data\IBinding $binding
	 */
	#[MethodOverride]public function __construct_2 ($binding){}
}
class BindingEvaluator_1 extends \Avalonia\Controls\Control implements
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
	\Avalonia\Styling\ISetterValue
{
	use BindingEvaluator_1Override;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[T]
	 */
	public static $ValueProperty;
	/**
	 * @property
	 * @var \T|object
	 */
	public $Value;
	/**
	 * @property
	 * @var \Avalonia\Data\IBinding
	 */
	public $ValueBinding;
	/**
	 * @property
	 * @var \Avalonia\Controls\ITemplate_1[Avalonia\Controls\Control]
	 */
	public $FocusAdorner;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\DataTemplates
	 * @since readonly
	 */
	public $DataTemplates;
	/**
	 * @property
	 * @var \Avalonia\Controls\ContextMenu
	 */
	public $ContextMenu;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\FlyoutBase
	 */
	public $ContextFlyout;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLoaded;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Tag;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Focusable;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsEnabled;
	/**
	 * @property
	 * @var \Avalonia\Input\Cursor
	 */
	public $Cursor;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsKeyboardFocusWithin;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFocused;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsHitTestVisible;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsPointerOver;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsTabStop;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsEffectivelyEnabled;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $TabIndex;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Input\KeyBinding]
	 * @since readonly
	 */
	public $KeyBindings;
	/**
	 * @property
	 * @var \Avalonia\Input\GestureRecognizers\GestureRecognizerCollection
	 * @since readonly
	 */
	public $GestureRecognizers;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Height;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MinWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaxWidth;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MinHeight;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaxHeight;
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 */
	public $Margin;
	/**
	 * @property
	 * @var \Avalonia\Layout\HorizontalAlignment
	 */
	public $HorizontalAlignment;
	/**
	 * @property
	 * @var \Avalonia\Layout\VerticalAlignment
	 */
	public $VerticalAlignment;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $DesiredSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMeasureValid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsArrangeValid;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $UseLayoutRounding;
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
	 * @return \System\Void|void
	 */
	public function ClearDataContext(){}
	/**
	 * @uses BindingEvaluator_1Override::GetDynamicValue_1 <br>public , args: ($o, $clearDataContext)<br>
	 * @uses BindingEvaluator_1Override::GetDynamicValue_2 <br>public , args: ($o)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetDynamicValue (\override ...$args){}
	private function get_IsDataTemplatesInitialized(){}
	private function Initialize($setter){}
	private function EnsureInitialized(){}
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
	 * @uses BindingEvaluator_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses BindingEvaluator_1Override::__construct_2 <br>public , args: ($binding)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}