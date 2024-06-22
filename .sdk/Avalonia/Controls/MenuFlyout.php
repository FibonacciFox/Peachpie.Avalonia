<?php
namespace Avalonia\Controls;
class MenuFlyout extends \Avalonia\Controls\Primitives\PopupFlyoutBase implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Controls\Diagnostics\IPopupHostProvider
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Collections\IEnumerable]
	 */
	public static $ItemsSourceProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Templates\IDataTemplate]
	 */
	public static $ItemTemplateProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Styling\ControlTheme]
	 */
	public static $ItemContainerThemeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Styling\ControlTheme]
	 */
	public static $FlyoutPresenterThemeProperty;
	/**
	 * @property
	 * @var \Avalonia\Controls\Classes
	 * @since readonly
	 */
	public $FlyoutPresenterClasses;
	/**
	 * @property
	 * @var \Avalonia\Controls\ItemCollection
	 * @since readonly
	 */
	public $Items;
	/**
	 * @property
	 * @var \System\Collections\IEnumerable
	 */
	public $ItemsSource;
	/**
	 * @property
	 * @var \Avalonia\Controls\Templates\IDataTemplate
	 */
	public $ItemTemplate;
	/**
	 * @property
	 * @var \Avalonia\Styling\ControlTheme
	 */
	public $ItemContainerTheme;
	/**
	 * @property
	 * @var \Avalonia\Styling\ControlTheme
	 */
	public $FlyoutPresenterTheme;
	/**
	 * @property
	 * @var \Avalonia\Controls\PlacementMode
	 */
	public $Placement;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 */
	public $PlacementGravity;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 */
	public $PlacementAnchor;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $HorizontalOffset;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $VerticalOffset;
	/**
	 * @property
	 * @var \Avalonia\Controls\FlyoutShowMode
	 */
	public $ShowMode;
	/**
	 * @property
	 * @var \Avalonia\Input\IInputElement
	 */
	public $OverlayInputPassThroughElement;
	/**
	 * @property
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment
	 */
	public $PlacementConstraintAdjustment;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsOpen;
	/**
	 * @property
	 * @var \Avalonia\Controls\Control
	 */
	public $Target;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function get_PopupHost(){}
	private function add_PopupHostChanged($value){}
	private function remove_PopupHostChanged($value){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}