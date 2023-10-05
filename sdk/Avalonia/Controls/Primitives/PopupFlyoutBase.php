<?php
namespace Avalonia\Controls\Primitives;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PopupFlyoutBaseMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ShowAt_1($placementTarget){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ShowAt_2($placementTarget, $showAtPointer){}
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
class PopupFlyoutBase extends \Avalonia\Controls\Primitives\FlyoutBase implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Controls\Diagnostics\IPopupHostProvider
{
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\PlacementMode]
	 * @field
	 */
	public readonly $PlacementProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $HorizontalOffsetProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 * @field
	 */
	public readonly $VerticalOffsetProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor]
	 * @field
	 */
	public readonly $PlacementAnchorProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\Primitives\PopupPositioning\PopupGravity]
	 * @field
	 */
	public readonly $PlacementGravityProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Controls\FlyoutShowMode]
	 * @field
	 */
	public readonly $ShowModeProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Input\IInputElement]
	 * @field
	 */
	public readonly $OverlayInputPassThroughElementProperty;
	/**
	 * @var \Avalonia\Controls\PlacementMode
	 * @property
	 */
	public $Placement;
	/**
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 * @property
	 */
	public $PlacementGravity;
	/**
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 * @property
	 */
	public $PlacementAnchor;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $HorizontalOffset;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $VerticalOffset;
	/**
	 * @var \Avalonia\Controls\FlyoutShowMode
	 * @property
	 */
	public $ShowMode;
	/**
	 * @var \Avalonia\Input\IInputElement
	 * @property
	 */
	public $OverlayInputPassThroughElement;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsOpen;
	/**
	 * @var \Avalonia\Controls\Control
	 * @property
	 */
	public $Target;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @return \Avalonia\Controls\Primitives\Popup
	 */
	protected  function get_Popup(){}
	/**
	 * @return \Avalonia\Controls\PlacementMode
	 */
	public  function get_Placement(){}
	/**
	 * @param \Avalonia\Controls\PlacementMode $value
	 * @return \System\Void|void
	 */
	public  function set_Placement($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 */
	public  function get_PlacementGravity(){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $value
	 * @return \System\Void|void
	 */
	public  function set_PlacementGravity($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 */
	public  function get_PlacementAnchor(){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $value
	 * @return \System\Void|void
	 */
	public  function set_PlacementAnchor($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_HorizontalOffset(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_HorizontalOffset($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_VerticalOffset(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_VerticalOffset($value){}
	/**
	 * @return \Avalonia\Controls\FlyoutShowMode
	 */
	public  function get_ShowMode(){}
	/**
	 * @param \Avalonia\Controls\FlyoutShowMode $value
	 * @return \System\Void|void
	 */
	public  function set_ShowMode($value){}
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	public  function get_OverlayInputPassThroughElement(){}
	/**
	 * @param \Avalonia\Input\IInputElement $value
	 * @return \System\Void|void
	 */
	public  function set_OverlayInputPassThroughElement($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PopupHost(){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_PopupHostChanged($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_PopupHostChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_Closing($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_Closing($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Opening($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Opening($value){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::ShowAt_1 ($placementTarget)
	 * @uses PopupFlyoutBaseMethodsOverride::ShowAt_2 ($placementTarget, $showAtPointer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ShowAt(mixed ...$args){}
	/**
	 * @param \System\Boolean $canCancel
	 * @return \System\Boolean
	 */
	protected  function HideCore($canCancel){}
	/**
	 * @param \Avalonia\Controls\Control $placementTarget
	 * @param \System\Boolean $showAtPointer
	 * @return \System\Boolean
	 */
	protected  function ShowAtCore($placementTarget, $showAtPointer){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\VisualTreeAttachmentEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PlacementTarget_DetachedFromVisualTree($sender, $e){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleTransientDismiss($args){}
	/**
	 * @param \System\ComponentModel\CancelEventArgs $args
	 * @return \System\Void|void
	 */
	protected  function OnOpening($args){}
	/**
	 * @param \System\ComponentModel\CancelEventArgs $args
	 * @return \System\Void|void
	 */
	protected  function OnClosing($args){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	protected  function CreatePresenter(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreatePopup(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnPopupOpened($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\ComponentModel\CancelEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnPopupClosing($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnPopupClosed($sender, $e){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Input\KeyEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnPlacementTargetOrPopupKeyUp($sender, $e){}
	/**
	 * @param \System\Boolean $showAtPointer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PositionPopup($showAtPointer){}
	/**
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnContextFlyoutPropertyChanged($args){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\ContextRequestedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnControlContextRequested($sender, $e){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CancelClosing(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CancelOpening(){}
	/**
	 * @param \Avalonia\Controls\Control $presenter
	 * @param \Avalonia\Controls\Classes $classes
	 * @return \System\Void|void
	 */
	protected static function SetPresenterClasses($presenter, $classes){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses PopupFlyoutBaseMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses PopupFlyoutBaseMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::get_Item_1 ($property)
	 * @uses PopupFlyoutBaseMethodsOverride::get_Item_2 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::set_Item_1 ($property, $value)
	 * @uses PopupFlyoutBaseMethodsOverride::set_Item_2 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::ClearValue_1 ($property)
	 * @uses PopupFlyoutBaseMethodsOverride::ClearValue_2 ($property)
	 * @uses PopupFlyoutBaseMethodsOverride::ClearValue_3 ($property)
	 * @uses PopupFlyoutBaseMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::GetValue_1 ($property)
	 * @uses PopupFlyoutBaseMethodsOverride::GetValue_2 ($property)
	 * @uses PopupFlyoutBaseMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses PopupFlyoutBaseMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses PopupFlyoutBaseMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses PopupFlyoutBaseMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses PopupFlyoutBaseMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses PopupFlyoutBaseMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses PopupFlyoutBaseMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses PopupFlyoutBaseMethodsOverride::Bind_5 ($property, $source)
	 * @uses PopupFlyoutBaseMethodsOverride::Bind_6 ($property, $source)
	 * @uses PopupFlyoutBaseMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses PopupFlyoutBaseMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses PopupFlyoutBaseMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses PopupFlyoutBaseMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
