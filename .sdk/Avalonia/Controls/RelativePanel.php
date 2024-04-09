<?php
namespace Avalonia\Controls;
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
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 */
	public static $AboveProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $AlignBottomWithPanelProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 */
	public static $AlignBottomWithProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $AlignHorizontalCenterWithPanelProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 */
	public static $AlignHorizontalCenterWithProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $AlignLeftWithPanelProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 */
	public static $AlignLeftWithProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $AlignRightWithPanelProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 */
	public static $AlignRightWithProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $AlignTopWithPanelProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 */
	public static $AlignTopWithProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $AlignVerticalCenterWithPanelProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 */
	public static $AlignVerticalCenterWithProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 */
	public static $BelowProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 */
	public static $LeftOfProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Object]
	 */
	public static $RightOfProperty;
	/**
	 * @property
	 * @var \Avalonia\Controls\Controls
	 * @since readonly
	 */
	public $Children;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Background;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsItemsHost;
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
	 * @return \System\Boolean|bool
	 */
	public static function GetAlignBottomWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean|bool $value
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
	 * @return \System\Boolean|bool
	 */
	public static function GetAlignHorizontalCenterWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean|bool $value
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
	 * @return \System\Boolean|bool
	 */
	public static function GetAlignLeftWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean|bool $value
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
	 * @return \System\Boolean|bool
	 */
	public static function GetAlignRightWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean|bool $value
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
	 * @return \System\Boolean|bool
	 */
	public static function GetAlignTopWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean|bool $value
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
	 * @return \System\Boolean|bool
	 */
	public static function GetAlignVerticalCenterWithPanel($obj){}
	/**
	 * @param \Avalonia\AvaloniaObject $obj
	 * @param \System\Boolean|bool $value
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
	private function GetDependencyElement($property, $child){}
	private function add_ChildIndexChanged($value){}
	private function remove_ChildIndexChanged($value){}
	private function GetChildIndex($child){}
	private function TryGetTotalCount(&$count){}
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
	 */
	public function __construct(){}
}