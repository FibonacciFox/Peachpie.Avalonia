<?php
namespace Avalonia\Controls;
class Expander extends \Avalonia\Controls\Primitives\HeaderedContentControl implements
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
	\Avalonia\Controls\IContentControl,
	\Avalonia\Controls\Presenters\IContentPresenterHost,
	\Avalonia\Controls\IHeadered
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Animation\IPageTransition]
	 */
	public static $ContentTransitionProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\ExpandDirection]
	 */
	public static $ExpandDirectionProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsExpandedProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $CollapsedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\CancelRoutedEventArgs]
	 */
	public static $CollapsingEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\RoutedEventArgs]
	 */
	public static $ExpandedEvent;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Interactivity\RoutedEvent_1[Avalonia\Interactivity\CancelRoutedEventArgs]
	 */
	public static $ExpandingEvent;
	/**
	 * @property
	 * @var \Avalonia\Animation\IPageTransition
	 */
	public $ContentTransition;
	/**
	 * @property
	 * @var \Avalonia\Controls\ExpandDirection
	 */
	public $ExpandDirection;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsExpanded;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Header;
	/**
	 * @property
	 * @var \Avalonia\Controls\Presenters\ContentPresenter
	 * @since readonly
	 */
	public $HeaderPresenter;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 */
	public $HeaderTemplate;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Content;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 */
	public $ContentTemplate;
	/**
	 * @property
	 * @var \Avalonia\Controls\Presenters\ContentPresenter
	 * @since readonly
	 */
	public $Presenter;
	/**
	 * @property
	 * @var \Avalonia\Layout\HorizontalAlignment
	 */
	public $HorizontalContentAlignment;
	/**
	 * @property
	 * @var \Avalonia\Layout\VerticalAlignment
	 */
	public $VerticalContentAlignment;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Background;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $BorderBrush;
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 */
	public $BorderThickness;
	/**
	 * @property
	 * @var \Avalonia\CornerRadius
	 */
	public $CornerRadius;
	/**
	 * @property
	 * @var \Avalonia\Media\FontFamily
	 */
	public $FontFamily;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $FontSize;
	/**
	 * @property
	 * @var \Avalonia\Media\FontStyle
	 */
	public $FontStyle;
	/**
	 * @property
	 * @var \Avalonia\Media\FontWeight
	 */
	public $FontWeight;
	/**
	 * @property
	 * @var \Avalonia\Media\FontStretch
	 */
	public $FontStretch;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Foreground;
	/**
	 * @property
	 * @var \Avalonia\Thickness
	 */
	public $Padding;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\IControlTemplate
	 */
	public $Template;
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
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Collapsed($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Collapsed($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\CancelRoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Collapsing($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\CancelRoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Collapsing($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Expanded($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\RoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Expanded($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\CancelRoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Expanding($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Interactivity\CancelRoutedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Expanding($value){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $eventArgs
	 * @return \System\Void|void
	 */
	protected function OnCollapsed($eventArgs){}
	/**
	 * @param \Avalonia\Interactivity\CancelRoutedEventArgs $eventArgs
	 * @return \System\Void|void
	 */
	protected function OnCollapsing($eventArgs){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $eventArgs
	 * @return \System\Void|void
	 */
	protected function OnExpanded($eventArgs){}
	/**
	 * @param \Avalonia\Interactivity\CancelRoutedEventArgs $eventArgs
	 * @return \System\Void|void
	 */
	protected function OnExpanding($eventArgs){}
	private function StartContentTransition(){}
	/**
	 * @param \System\Boolean|bool $value
	 * @return \System\Boolean|bool
	 */
	protected function OnCoerceIsExpanded($value){}
	private static function CoerceIsExpanded($instance, $value){}
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