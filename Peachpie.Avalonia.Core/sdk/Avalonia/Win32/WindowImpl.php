<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WindowImplMethodsOverride
{
	/**
	 * @return \Avalonia\Input\Raw\RawPointerPoint
	 */
	#[MethodOverride] private  function CreateRawPointerPoint_1($pointerInfo){}
	/**
	 * @return \Avalonia\Input\Raw\RawPointerPoint
	 */
	#[MethodOverride] private  function CreateRawPointerPoint_2($info){}
	/**
	 * @return \Avalonia\Input\Raw\RawPointerPoint
	 */
	#[MethodOverride] private  function CreateRawPointerPoint_3($info){}
	/**
	 * @return \Avalonia\Input\RawInputModifiers
	 */
	#[MethodOverride] private static function GetInputModifiers_1($keys){}
	/**
	 * @return \Avalonia\Input\RawInputModifiers
	 */
	#[MethodOverride] private static function GetInputModifiers_2($flags){}
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	#[MethodOverride] public  function get_Handle_1(){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private  function get_Handle_2(){}
}
/**
 */
class WindowImpl extends \System\Object implements 
	\Avalonia\Platform\IWindowImpl,
	\Avalonia\Platform\IWindowBaseImpl,
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\OpenGL\Egl\IEglWindowGlPlatformSurfaceInfo
{
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $msg
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @return \System\IntPtr
	 */
	protected  function AppWndProc($hWnd, $msg, $wParam, $lParam){}
	/**
	 * @param \Avalonia\Win32\Interop\POINTER_INFO $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateLazyIntermediatePoints($info){}
	/**
	 * @param \Avalonia\Win32\Interop\MOUSEMOVEPOINT $movePoint
	 * @param \Avalonia\Win32\Interop\MOUSEMOVEPOINT $prevMovePoint
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateIntermediatePoints($movePoint, $prevMovePoint){}
	/**
	 * @param \Avalonia\Input\IInputDevice $device
	 * @param \System\UInt64 $timestamp
	 * @param \Avalonia\Input\Raw\RawPointerEventType $eventType
	 * @param \Avalonia\Input\Raw\RawPointerPoint $point
	 * @param \Avalonia\Input\RawInputModifiers $modifiers
	 * @param \System\UInt32 $rawPointerId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreatePointerArgs($device, $timestamp, $eventType, $point, $modifiers, $rawPointerId){}
	/**
	 * @param \System\IntPtr $wParam
	 * @param \Avalonia\Input\IPointerDevice& $device
	 * @param \Avalonia\Win32\Interop\POINTER_INFO& $info
	 * @param \Avalonia\Input\Raw\RawPointerPoint& $point
	 * @param \Avalonia\Input\RawInputModifiers& $modifiers
	 * @param \System\UInt32& $timestamp
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDevicePointerInfo($wParam, $device, $info, $point, $modifiers, $timestamp){}
	/**
	 * @uses WindowImplMethodsOverride::CreateRawPointerPoint_1 ($pointerInfo)
	 * @uses WindowImplMethodsOverride::CreateRawPointerPoint_2 ($info)
	 * @uses WindowImplMethodsOverride::CreateRawPointerPoint_3 ($info)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateRawPointerPoint(mixed ...$args){}
	/**
	 * @param \Avalonia\Win32\Interop\WindowsMessage $message
	 * @param \Avalonia\Win32\Interop\POINTER_INFO $info
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEventType($message, $info){}
	/**
	 * @param \Avalonia\Win32\Interop\PointerButtonChangeType $type
	 * @param \System\Boolean $isTouch
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToEventType($type, $isTouch){}
	/**
	 * @param \System\IntPtr $hkl
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateInputMethod($hkl){}
	/**
	 * @param \System\IntPtr $ptr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToInt32($ptr){}
	/**
	 * @param \System\Int32|int $param
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HighWord($param){}
	/**
	 * @param \System\IntPtr $lParam
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DipFromLParam($lParam){}
	/**
	 * @param \System\IntPtr $lParam
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PointFromLParam($lParam){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShouldIgnoreTouchEmulatedMessage(){}
	/**
	 * @param \System\IntPtr $wParam
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMouseModifiers($wParam){}
	/**
	 * @uses WindowImplMethodsOverride::GetInputModifiers_1 ($keys)
	 * @uses WindowImplMethodsOverride::GetInputModifiers_2 ($flags)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetInputModifiers(mixed ...$args){}
	/**
	 * @return \Avalonia\Input\IInputRoot
	 */
	protected  function get_Owner(){}
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
	 * @return \System\Action
	 */
	public  function get_Closed(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_Closed($value){}
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
	 * @return \System\Action_1
	 */
	public  function get_PositionChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_PositionChanged($value){}
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
	 * @return \System\Action
	 */
	public  function get_LostFocus(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_LostFocus($value){}
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
	 * @return \Avalonia\Thickness
	 */
	public  function get_BorderThickness(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_PrimaryScreenRenderScaling(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_RenderScaling(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_DesktopScaling(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_ClientSize(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_FrameSize(){}
	/**
	 * @return \Avalonia\Platform\IScreenImpl
	 */
	public  function get_Screen(){}
	/**
	 * @uses WindowImplMethodsOverride::get_Handle_1 ()
	 * @uses WindowImplMethodsOverride::get_Handle_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Handle(mixed ...$args){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Handle($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_MaxAutoSizeHint(){}
	/**
	 * @return \Avalonia\Input\IMouseDevice
	 */
	public  function get_MouseDevice(){}
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
	 * @return \Avalonia\Controls\WindowTransparencyLevel
	 */
	public  function get_TransparencyLevel(){}
	/**
	 * @param \Avalonia\Controls\WindowTransparencyLevel $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_TransparencyLevel($value){}
	/**
	 * @return \System\IntPtr
	 */
	protected  function get_Hwnd(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsMouseInPointerEnabled(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Object|object
	 */
	public  function TryGetFeature($featureType){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $transparencyLevels
	 * @return \System\Void|void
	 */
	public  function SetTransparencyLevelHint($transparencyLevels){}
	/**
	 * @param \Avalonia\Controls\WindowTransparencyLevel $level
	 * @param \System\Version $windowsVersion
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsSupported($level, $windowsVersion){}
	/**
	 * @param \System\Version $windowsVersion
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetTransparencyTransparent($windowsVersion){}
	/**
	 * @param \System\Version $windowsVersion
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetTransparencyBlur($windowsVersion){}
	/**
	 * @param \System\Version $windowsVersion
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetTransparencyAcrylicBlur($windowsVersion){}
	/**
	 * @param \System\Version $windowsVersion
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetTransparencyMica($windowsVersion){}
	/**
	 * @param \Avalonia\Win32\Interop\AccentState $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetAccentState($state){}
	/**
	 * @param \System\Boolean $useHostBackdropBrush
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetUseHostBackdropBrush($useHostBackdropBrush){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Surfaces(){}
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasFullDecorations(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HiddenBorderSize(){}
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \System\Void|void
	 */
	public  function Move($point){}
	/**
	 * @param \Avalonia\Size $minSize
	 * @param \Avalonia\Size $maxSize
	 * @return \System\Void|void
	 */
	public  function SetMinMaxSize($minSize, $maxSize){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	public  function get_Compositor(){}
	/**
	 * @param \Avalonia\Size $value
	 * @param \Avalonia\Controls\WindowResizeReason $reason
	 * @return \System\Void|void
	 */
	public  function Resize($value, $reason){}
	/**
	 * @return \System\Void|void
	 */
	public  function Activate(){}
	/**
	 * @return \Avalonia\Platform\IPopupImpl
	 */
	public  function CreatePopup(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public  function Invalidate($rect){}
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
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @return \System\Void|void
	 */
	public  function SetInputRoot($inputRoot){}
	/**
	 * @return \System\Void|void
	 */
	public  function Hide(){}
	/**
	 * @param \System\Boolean $activate
	 * @param \System\Boolean $isDialog
	 * @return \System\Void|void
	 */
	public  function Show($activate, $isDialog){}
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
	 * @param \Avalonia\Platform\IWindowImpl $parent
	 * @return \System\Void|void
	 */
	public  function SetParent($parent){}
	/**
	 * @param \System\Boolean $enable
	 * @return \System\Void|void
	 */
	public  function SetEnabled($enable){}
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
	 * @param \Avalonia\Platform\ICursorImpl $cursor
	 * @return \System\Void|void
	 */
	public  function SetCursor($cursor){}
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
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function CanResize($value){}
	/**
	 * @param \Avalonia\Controls\SystemDecorations $value
	 * @return \System\Void|void
	 */
	public  function SetSystemDecorations($value){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function SetTopmost($value){}
	/**
	 * @param \Avalonia\Platform\PlatformThemeVariant $themeVariant
	 * @return \System\Void|void
	 */
	public  function SetFrameThemeVariant($themeVariant){}
	/**
	 * @param \System\UInt16 $atom
	 * @return \System\IntPtr
	 */
	protected  function CreateWindowOverride($atom){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateWindow(){}
	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateDropTarget($inputRoot){}
	/**
	 * @param \System\Boolean $fullscreen
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetFullScreen($fullscreen){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateExtendMargins(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ExtendClientArea(){}
	/**
	 * @param \Avalonia\Controls\WindowState $state
	 * @param \System\Boolean $activate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShowWindow($state, $activate){}
	/**
	 * @param \System\Boolean $isDisposing
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BeforeCloseCleanup($isDisposing){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AfterCloseCleanup(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MaximizeWithoutCoveringTaskbar(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetWindowStateStyles(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetStyle(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetExtendedStyle(){}
	/**
	 * @param \Avalonia\Win32\Interop\WindowStyles $style
	 * @param \System\Boolean $save
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetStyle($style, $save){}
	/**
	 * @param \Avalonia\Win32\Interop\WindowStyles $style
	 * @param \System\Boolean $save
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetExtendedStyle($style, $save){}
	/**
	 * @param \Avalonia\Win32\WindowProperties $newProperties
	 * @param \System\Boolean $forceChanges
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateWindowProperties($newProperties, $forceChanges){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DisableCloseButton($hwnd){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnableCloseButton($hwnd){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Size(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Scaling(){}
	/**
	 * @param \System\Boolean $hint
	 * @return \System\Void|void
	 */
	public  function SetExtendClientAreaToDecorationsHint($hint){}
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
	 * @return \System\Boolean
	 */
	public  function get_IsClientAreaExtendedToDecorations(){}
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
	 * @return \System\Boolean
	 */
	public  function get_NeedsManagedDecorations(){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_ExtendedMargins(){}
	/**
	 * @return \Avalonia\Thickness
	 */
	public  function get_OffScreenMargin(){}
	/**
	 * @return \Avalonia\Controls\AcrylicPlatformCompensationLevels
	 */
	public  function get_AcrylicCompensationLevels(){}
	/**
	 * @param \Avalonia\Controls\WindowResizeReason $reason
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetResizeReason($reason){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HitTestNCA($hWnd, $wParam, $lParam){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $msg
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @param \System\Boolean& $callDwp
	 * @return \System\IntPtr
	 */
	protected  function CustomCaptionProc($hWnd, $msg, $wParam, $lParam, $callDwp){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $msg
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @return \System\IntPtr
	 */
	protected  function WndProc($hWnd, $msg, $wParam, $lParam){}
	/**
	 * @return \Avalonia\Controls\Platform\INativeControlHostImpl
	 */
	public  function get_NativeControlHost(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_ShouldTakeFocusOnClick(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
