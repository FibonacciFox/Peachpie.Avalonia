<?php
namespace Avalonia\Interactivity;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InteractiveOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Delegate $handler
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean|bool $handledEventsToo
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddHandler_1 ($routedEvent, $handler, $routes, $handledEventsToo){}
	/**
	 * @deprecated
	 * @param \Avalonia\Interactivity\RoutedEvent_1 $routedEvent [generic: TEventArgs]
	 * @param \System\EventHandler_1 $handler [generic: TEventArgs]
	 * @param \Avalonia\Interactivity\RoutingStrategies $routes
	 * @param \System\Boolean|bool $handledEventsToo
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddHandler_2 ($routedEvent, $handler, $routes, $handledEventsToo){}
	/**
	 * @deprecated
	 * @param \Avalonia\Interactivity\RoutedEvent $routedEvent
	 * @param \System\Delegate $handler
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RemoveHandler_1 ($routedEvent, $handler){}
	/**
	 * @deprecated
	 * @param \Avalonia\Interactivity\RoutedEvent_1 $routedEvent [generic: TEventArgs]
	 * @param \System\EventHandler_1 $handler [generic: TEventArgs]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function RemoveHandler_2 ($routedEvent, $handler){}
}
class Interactive extends \Avalonia\Layout\Layoutable implements
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
	use InteractiveOverride;
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
	 * @uses InteractiveOverride::AddHandler_1 <br>public , args: ($routedEvent, $handler, $routes, $handledEventsToo)<br>
	 * @uses InteractiveOverride::AddHandler_2 <br>public , args: ($routedEvent, $handler, $routes, $handledEventsToo)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AddHandler (\override ...$args){}
	/**
	 * @uses InteractiveOverride::RemoveHandler_1 <br>public , args: ($routedEvent, $handler)<br>
	 * @uses InteractiveOverride::RemoveHandler_2 <br>public , args: ($routedEvent, $handler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function RemoveHandler (\override ...$args){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @return \System\Void|void
	 */
	public function RaiseEvent($e){}
	/**
	 * @param \Avalonia\Interactivity\RoutedEvent $e
	 * @return \Avalonia\Interactivity\EventRoute
	 */
	protected function BuildEventRoute($e){}
	private function AddEventSubscription($routedEvent, $subscription){}
	private function AddToEventRoute($routedEvent, $route){}
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