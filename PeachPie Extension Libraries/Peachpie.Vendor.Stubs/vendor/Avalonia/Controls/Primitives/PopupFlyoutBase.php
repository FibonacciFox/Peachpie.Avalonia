<?php
namespace Avalonia\Controls\Primitives;
class PopupFlyoutBase extends \Avalonia\Controls\Primitives\FlyoutBase implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Controls\Diagnostics\IPopupHostProvider
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\PlacementMode]
	 */
	public static $PlacementProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $HorizontalOffsetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $VerticalOffsetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor]
	 */
	public static $PlacementAnchorProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\PopupPositioning\PopupGravity]
	 */
	public static $PlacementGravityProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\FlyoutShowMode]
	 */
	public static $ShowModeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\IInputElement]
	 */
	public static $OverlayInputPassThroughElementProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment]
	 */
	public static $PlacementConstraintAdjustmentProperty;
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
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function get_PopupHost(){}
	private function add_PopupHostChanged($value){}
	private function remove_PopupHostChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\ComponentModel\CancelEventArgs]
	 * @return \System\Void|void
	 */
	public function add_Closing($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\ComponentModel\CancelEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Closing($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Opening($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Opening($value){}
	/**
	 * @param \System\Boolean|bool $canCancel
	 * @return \System\Boolean|bool
	 */
	protected function HideCore($canCancel){}
	/**
	 * @param \Avalonia\Controls\Control $placementTarget
	 * @param \System\Boolean|bool $showAtPointer
	 * @return \System\Boolean|bool
	 */
	protected function ShowAtCore($placementTarget, $showAtPointer){}
	private function PlacementTarget_DetachedFromVisualTree($sender, $e){}
	private function HandleTransientDismiss($args){}
	/**
	 * @param \System\ComponentModel\CancelEventArgs $args
	 * @return \System\Void|void
	 */
	protected function OnOpening($args){}
	/**
	 * @param \System\ComponentModel\CancelEventArgs $args
	 * @return \System\Void|void
	 */
	protected function OnClosing($args){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	abstract protected function CreatePresenter();
	private function CreatePopup(){}
	private function OnPopupOpened($sender, $e){}
	private function OnPopupClosing($sender, $e){}
	private function OnPopupClosed($sender, $e){}
	private function OnPlacementTargetOrPopupKeyUp($sender, $e){}
	private function PositionPopup($showAtPointer){}
	private static function OnContextFlyoutPropertyChanged($args){}
	private static function OnControlContextRequested($sender, $e){}
	private function CancelClosing(){}
	private function CancelOpening(){}
	/**
	 * @param \Avalonia\Controls\Control $presenter
	 * @param \Avalonia\Controls\Classes $classes
	 * @return \System\Void|void
	 */
	protected static function SetPresenterClasses($presenter, $classes){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}