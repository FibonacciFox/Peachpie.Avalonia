<?php
namespace Avalonia\X11;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait X11WindowMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function ScheduleInput_1($args, $xev){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function ScheduleInput_2($args){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Resize_1($clientSize, $reason){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Resize_2($clientSize, $force, $reason){}
}
/**
 */
class X11Window extends \System\Object implements 
	\Avalonia\Platform\IWindowImpl,
	\Avalonia\Platform\IWindowBaseImpl,
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\Platform\IPopupImpl,
	\Avalonia\X11\IXI2Client
{
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $ClientSize;
	/**
	 * @var \System\Nullable_1[Avalonia\Size]
	 * @property
	 */
	public readonly $FrameSize;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $RenderScaling;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $DesktopScaling;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Object]
	 * @property
	 */
	public readonly $Surfaces;
	/**
	 * @var \System\Action_1[Avalonia\Input\Raw\RawInputEventArgs]
	 * @property
	 */
	public $Input;
	/**
	 * @var \System\Action_1[Avalonia\Rect]
	 * @property
	 */
	public $Paint;
	/**
	 * @var \System\Action_2[Avalonia\Size,Avalonia\Controls\WindowResizeReason]
	 * @property
	 */
	public $Resized;
	/**
	 * @var \System\Action_1[System\Double]
	 * @property
	 */
	public $ScalingChanged;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $Deactivated;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $Activated;
	/**
	 * @var \System\Func_2[Avalonia\Controls\WindowCloseReason,System\Boolean]
	 * @property
	 */
	public $Closing;
	/**
	 * @var \System\Action_1[Avalonia\Controls\WindowState]
	 * @property
	 */
	public $WindowStateChanged;
	/**
	 * @var \System\Action_1[Avalonia\Controls\WindowTransparencyLevel]
	 * @property
	 */
	public $TransparencyLevelChanged;
	/**
	 * @var \System\Action_1[System\Boolean]
	 * @property
	 */
	public $ExtendClientAreaToDecorationsChanged;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public readonly $ExtendedMargins;
	/**
	 * @var \Avalonia\Thickness
	 * @property
	 */
	public readonly $OffScreenMargin;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsClientAreaExtendedToDecorations;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $Closed;
	/**
	 * @var \System\Action_1[Avalonia\PixelPoint]
	 * @property
	 */
	public $PositionChanged;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $LostFocus;
	/**
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @var \Avalonia\Controls\WindowState
	 * @property
	 */
	public $WindowState;
	/**
	 * @var \Avalonia\Input\IInputRoot
	 * @property
	 */
	public readonly $InputRoot;
	/**
	 * @var \Avalonia\Platform\IPlatformHandle
	 * @property
	 */
	public readonly $Handle;
	/**
	 * @var \Avalonia\PixelPoint
	 * @property
	 */
	public $Position;
	/**
	 * @var \Avalonia\Input\IMouseDevice
	 * @property
	 */
	public readonly $MouseDevice;
	/**
	 * @var \Avalonia\Input\TouchDevice
	 * @property
	 */
	public readonly $TouchDevice;
	/**
	 * @var \Avalonia\Platform\IScreenImpl
	 * @property
	 */
	public readonly $Screen;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $MaxAutoSizeHint;
	/**
	 * @var \System\Action
	 * @property
	 */
	public $GotInputWhenDisabled;
	/**
	 * @var \Avalonia\Controls\Primitives\PopupPositioning\IPopupPositioner
	 * @property
	 */
	public readonly $PopupPositioner;
	/**
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @property
	 */
	public readonly $TransparencyLevel;
	/**
	 * @var \Avalonia\Controls\AcrylicPlatformCompensationLevels
	 * @property
	 */
	public readonly $AcrylicCompensationLevels;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $NeedsManagedDecorations;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEnabled;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateMotifHints(){}
	/**
	 * @param \System\Nullable_1 $preResize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateSizeHints($preResize){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_ClientSize(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_FrameSize(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_RenderScaling(){}
	/**
	 * @param \System\Double|double $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_RenderScaling($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_DesktopScaling(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Surfaces(){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_Input(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Input($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_Paint(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Paint($value){}
	/**
	 * @return \System\Action_2
	 */
	public  function get_Resized(){}
	/**
	 * @param \System\Action_2 $value
	 * @return \System\Void|void
	 */
	public  function set_Resized($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_ScalingChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_ScalingChanged($value){}
	/**
	 * @return \System\Action
	 */
	public  function get_Deactivated(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_Deactivated($value){}
	/**
	 * @return \System\Action
	 */
	public  function get_Activated(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_Activated($value){}
	/**
	 * @return \System\Func_2
	 */
	public  function get_Closing(){}
	/**
	 * @param \System\Func_2 $value
	 * @return \System\Void|void
	 */
	public  function set_Closing($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_WindowStateChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_WindowStateChanged($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_TransparencyLevelChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_TransparencyLevelChanged($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_ExtendClientAreaToDecorationsChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_ExtendClientAreaToDecorationsChanged($value){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_ExtendedMargins(){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_OffScreenMargin(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsClientAreaExtendedToDecorations(){}
	/**
	 * @return \System\Action
	 */
	public  function get_Closed(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_Closed($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_PositionChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_PositionChanged($value){}
	/**
	 * @return \System\Action
	 */
	public  function get_LostFocus(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_LostFocus($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	public  function get_Compositor(){}
	/**
	 * @param \Avalonia\X11\XEvent& $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnEvent($ev){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetFrameExtents(){}
	/**
	 * @param \System\Boolean $skipResize
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateScaling($skipResize){}
	/**
	 * @return \Avalonia\Controls\WindowState
	 */
	public  function get_WindowState(){}
	/**
	 * @param \Avalonia\Controls\WindowState $value
	 * @return \System\Void|void
	 */
	public  function set_WindowState($value){}
	/**
	 * @param \System\IntPtr $atom
	 * @param \System\Boolean $hasValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnPropertyChange($atom, $hasValue){}
	/**
	 * @param \Avalonia\X11\XModifierMask $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TranslateModifiers($state){}
	/**
	 * @uses X11WindowMethodsOverride::ScheduleInput_1 ($args, $xev)
	 * @uses X11WindowMethodsOverride::ScheduleInput_2 ($args)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ScheduleInput(mixed ...$args){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DispatchInput($args){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $args
	 * @return \System\Void|void
	 */
	public  function ScheduleXI2Input($args){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventType $type
	 * @param \Avalonia\X11\XEvent& $ev
	 * @param \Avalonia\X11\XModifierMask $mods
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MouseEvent($type, $ev, $mods){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnqueuePaint(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DoPaint(){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public  function Invalidate($rect){}
	/**
	 * @return \Avalonia\Input\IInputRoot
	 */
	public  function get_InputRoot(){}
	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @return \System\Void|void
	 */
	public  function SetInputRoot($inputRoot){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Object|object
	 */
	public  function TryGetFeature($featureType){}
	/**
	 * @param \System\Boolean $fromDestroyNotification
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Cleanup($fromDestroyNotification){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ActivateTransientChildIfNeeded(){}
	/**
	 * @param \Avalonia\Platform\IWindowImpl $parent
	 * @return \System\Void|void
	 */
	public  function SetParent($parent){}
	/**
	 * @param \System\Boolean $activate
	 * @param \System\Boolean $isDialog
	 * @return \System\Void|void
	 */
	public  function Show($activate, $isDialog){}
	/**
	 * @return \System\Void|void
	 */
	public  function Hide(){}
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \Avalonia\Point
	 */
	public  function PointToClient($point){}
	/**
	 * @param \Avalonia\Point $point
	 * @return \Avalonia\PixelPoint
	 */
	public  function PointToScreen($point){}
	/**
	 * @param \Avalonia\Controls\SystemDecorations $enabled
	 * @return \System\Void|void
	 */
	public  function SetSystemDecorations($enabled){}
	/**
	 * @uses X11WindowMethodsOverride::Resize_1 ($clientSize, $reason)
	 * @uses X11WindowMethodsOverride::Resize_2 ($clientSize, $force, $reason)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Resize(mixed ...$args){}
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \System\Void|void
	 */
	public  function Move($point){}
	/**
	 * @param \Avalonia\PixelPoint $position
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $scaling
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveResize($position, $size, $scaling){}
	/**
	 * @param \Avalonia\Size $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToPixelSize($size){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function CanResize($value){}
	/**
	 * @param \Avalonia\Platform\ICursorImpl $cursor
	 * @return \System\Void|void
	 */
	public  function SetCursor($cursor){}
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	public  function get_Handle(){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	public  function get_Position(){}
	/**
	 * @param \Avalonia\PixelPoint $value
	 * @return \System\Void|void
	 */
	public  function set_Position($value){}
	/**
	 * @return \Avalonia\Input\IMouseDevice
	 */
	public  function get_MouseDevice(){}
	/**
	 * @return \Avalonia\Input\TouchDevice
	 */
	public  function get_TouchDevice(){}
	/**
	 * @return \Avalonia\Platform\IPopupImpl
	 */
	public  function CreatePopup(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Activate(){}
	/**
	 * @return \Avalonia\Platform\IScreenImpl
	 */
	public  function get_Screen(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_MaxAutoSizeHint(){}
	/**
	 * @param \System\IntPtr $message_type
	 * @param \System\IntPtr $l0
	 * @param \System\Nullable_1 $l1
	 * @param \System\Nullable_1 $l2
	 * @param \System\Nullable_1 $l3
	 * @param \System\Nullable_1 $l4
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SendNetWMMessage($message_type, $l0, $l1, $l2, $l3, $l4){}
	/**
	 * @param \Avalonia\X11\NetWmMoveResize $side
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BeginMoveResize($side, $e){}
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public  function BeginMoveDrag($e){}
	/**
	 * @param \Avalonia\Controls\WindowEdge $edge
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public  function BeginResizeDrag($edge, $e){}
	/**
	 * @param \System\String|string $title
	 * @return \System\Void|void
	 */
	public  function SetTitle($title){}
	/**
	 * @param \System\String|string $wmClass
	 * @return \System\Void|void
	 */
	public  function SetWmClass($wmClass){}
	/**
	 * @param \Avalonia\Size $minSize
	 * @param \Avalonia\Size $maxSize
	 * @return \System\Void|void
	 */
	public  function SetMinMaxSize($minSize, $maxSize){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function SetTopmost($value){}
	/**
	 * @param \System\Boolean $enable
	 * @return \System\Void|void
	 */
	public  function SetEnabled($enable){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateWMHints(){}
	/**
	 * @param \System\Boolean $extendIntoClientAreaHint
	 * @return \System\Void|void
	 */
	public  function SetExtendClientAreaToDecorationsHint($extendIntoClientAreaHint){}
	/**
	 * @param \Avalonia\Platform\ExtendClientAreaChromeHints $hints
	 * @return \System\Void|void
	 */
	public  function SetExtendClientAreaChromeHints($hints){}
	/**
	 * @param \System\Double|double $titleBarHeight
	 * @return \System\Void|void
	 */
	public  function SetExtendClientAreaTitleBarHeightHint($titleBarHeight){}
	/**
	 * @return \System\Action
	 */
	public  function get_GotInputWhenDisabled(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_GotInputWhenDisabled($value){}
	/**
	 * @param \Avalonia\Platform\IWindowIconImpl $icon
	 * @return \System\Void|void
	 */
	public  function SetIcon($icon){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function ShowTaskbarIcon($value){}
	/**
	 * @param \System\Boolean $enable
	 * @param \System\IntPtr[] $atoms
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ChangeWMAtoms($enable, $atoms){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\IPopupPositioner
	 */
	public  function get_PopupPositioner(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $transparencyLevels
	 * @return \System\Void|void
	 */
	public  function SetTransparencyLevelHint($transparencyLevels){}
	/**
	 * @param \System\Boolean $enabled
	 * @return \System\Void|void
	 */
	public  function SetWindowManagerAddShadowHint($enabled){}
	/**
	 * @return \Avalonia\Controls\WindowTransparencyLevel
	 */
	public  function get_TransparencyLevel(){}
	/**
	 * @param \Avalonia\Platform\PlatformThemeVariant $themeVariant
	 * @return \System\Void|void
	 */
	public  function SetFrameThemeVariant($themeVariant){}
	/**
	 * @return \Avalonia\Controls\AcrylicPlatformCompensationLevels
	 */
	public  function get_AcrylicCompensationLevels(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_NeedsManagedDecorations(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEnabled(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateIC(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeIme(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateImePosition(){}
	/**
	 * @param \Avalonia\X11\XEvent& $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleKeyEvent($ev){}
	/**
	 * @param \Avalonia\X11\XEvent& $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TriggerClassicTextInputEvent($ev){}
	/**
	 * @param \Avalonia\X11\XEvent& $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TranslateEventToString($ev){}
	/**
	 * @param \Avalonia\Input\Raw\RawKeyEventArgs $args
	 * @param \Avalonia\X11\XEvent& $xev
	 * @param \System\Int32|int $keyval
	 * @param \System\Int32|int $keycode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScheduleKeyInput($args, $xev, $keyval, $keycode){}
	/**
	 * @param \Avalonia\Input\Raw\RawKeyEventArgs $args
	 * @param \Avalonia\X11\XEvent $xev
	 * @param \System\Int32|int $keyval
	 * @param \System\Int32|int $keycode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FilterIme($args, $xev, $keyval, $keycode){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProcessNextImeEvent(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
