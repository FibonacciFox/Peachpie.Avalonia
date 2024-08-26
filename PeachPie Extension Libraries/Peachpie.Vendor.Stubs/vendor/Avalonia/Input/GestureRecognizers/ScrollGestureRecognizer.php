<?php
namespace Avalonia\Input\GestureRecognizers;
class ScrollGestureRecognizer extends \Avalonia\Input\GestureRecognizers\GestureRecognizer implements
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
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Input\GestureRecognizers\ScrollGestureRecognizer,System\Boolean]
	 */
	public static $CanHorizontallyScrollProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Input\GestureRecognizers\ScrollGestureRecognizer,System\Boolean]
	 */
	public static $CanVerticallyScrollProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Input\GestureRecognizers\ScrollGestureRecognizer,System\Boolean]
	 */
	public static $IsScrollInertiaEnabledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Input\GestureRecognizers\ScrollGestureRecognizer,System\Int32]
	 */
	public static $ScrollStartDistanceProperty;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	const InertialScrollSpeedEnd = '5';
	/**
	 * @field
	 * @var \System\Double|double
	 */
	const InertialResistance = '0,15';
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $CanHorizontallyScroll;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $CanVerticallyScroll;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsScrollInertiaEnabled;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ScrollStartDistance;
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
	private function EndGesture(){}
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