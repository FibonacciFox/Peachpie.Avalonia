<?php
namespace Avalonia\Native;
/**
 */
class WindowBaseImpl extends \System\Object implements 
	\Avalonia\Platform\IWindowBaseImpl,
	\Avalonia\Platform\ITopLevelImpl,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable,
	\Avalonia\Controls\Platform\Surfaces\IFramebufferPlatformSurface
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindowBase $window
	 * @param \Avalonia\Native\Interop\IAvnScreens $screens
	 * @return \System\Void|void
	 */
	protected  function Init($window, $screens){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnWindowBase
	 */
	public  function get_Native(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_ClientSize(){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_FrameSize(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_Surfaces(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Surfaces($value){}
	/**
	 * @return \Avalonia\Controls\Platform\INativeControlHostImpl
	 */
	public  function get_NativeControlHost(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateFramebufferRenderTarget(){}
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
	 * @return \System\Action
	 */
	public  function get_Closed(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function set_Closed($value){}
	/**
	 * @return \Avalonia\Input\IMouseDevice
	 */
	public  function get_MouseDevice(){}
	/**
	 * @return \Avalonia\Platform\IPopupImpl
	 */
	public  function CreatePopup(){}
	/**
	 * @return \Avalonia\Automation\Peers\AutomationPeer
	 */
	public  function GetAutomationPeer(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Activate(){}
	/**
	 * @param \System\UInt64 $timeStamp
	 * @param \System\String|string $text
	 * @return \System\Boolean
	 */
	public  function RawTextInputEvent($timeStamp, $text){}
	/**
	 * @param \Avalonia\Native\Interop\AvnRawKeyEventType $type
	 * @param \System\UInt64 $timeStamp
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \System\UInt32 $key
	 * @return \System\Boolean
	 */
	public  function RawKeyEvent($type, $timeStamp, $modifiers, $key){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventArgs $e
	 * @return \System\Boolean
	 */
	protected  function ChromeHitTest($e){}
	/**
	 * @param \Avalonia\Native\Interop\AvnRawMouseEventType $type
	 * @param \System\UInt64 $timeStamp
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \Avalonia\Native\Interop\AvnVector $delta
	 * @return \System\Void|void
	 */
	public  function RawMouseEvent($type, $timeStamp, $modifiers, $point, $delta){}
	/**
	 * @param \Avalonia\Size $clientSize
	 * @param \Avalonia\Controls\WindowResizeReason $reason
	 * @return \System\Void|void
	 */
	public  function Resize($clientSize, $reason){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	public  function get_Compositor(){}
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
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @return \System\Void|void
	 */
	public  function SetInputRoot($inputRoot){}
	/**
	 * @param \System\Boolean $activate
	 * @param \System\Boolean $isDialog
	 * @return \System\Void|void
	 */
	public  function Show($activate, $isDialog){}
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
	 * @return \System\Void|void
	 */
	public  function Hide(){}
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public  function BeginMoveDrag($e){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_MaxAutoSizeHint(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function SetTopmost($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_RenderScaling(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_DesktopScaling(){}
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
	 * @param \Avalonia\Platform\ICursorImpl $cursor
	 * @return \System\Void|void
	 */
	public  function SetCursor($cursor){}
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
	public  function get_Input(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Input($value){}
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
	public  function get_TransparencyLevelChanged(){}
	/**
	 * @param \System\Action_1 $value
	 * @return \System\Void|void
	 */
	public  function set_TransparencyLevelChanged($value){}
	/**
	 * @return \Avalonia\Platform\IScreenImpl
	 */
	public  function get_Screen(){}
	/**
	 * @param \Avalonia\Platform\IScreenImpl $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Screen($value){}
	/**
	 * @param \Avalonia\Size $minSize
	 * @param \Avalonia\Size $maxSize
	 * @return \System\Void|void
	 */
	public  function SetMinMaxSize($minSize, $maxSize){}
	/**
	 * @param \Avalonia\Controls\WindowEdge $edge
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public  function BeginResizeDrag($edge, $e){}
	/**
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effects
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \Avalonia\Native\Interop\IAvnClipboard $clipboard
	 * @param \Avalonia\Native\Interop\IAvnDndResultCallback $callback
	 * @param \System\IntPtr $sourceHandle
	 * @return \System\Void|void
	 */
	protected  function BeginDraggingSession($effects, $point, $clipboard, $callback, $sourceHandle){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $transparencyLevels
	 * @return \System\Void|void
	 */
	public  function SetTransparencyLevelHint($transparencyLevels){}
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
	 * @param \Avalonia\Platform\PlatformThemeVariant $themeVariant
	 * @return \System\Void|void
	 */
	public  function SetFrameThemeVariant($themeVariant){}
	/**
	 * @return \Avalonia\Controls\AcrylicPlatformCompensationLevels
	 */
	public  function get_AcrylicCompensationLevels(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Object|object
	 */
	public  function TryGetFeature($featureType){}
	/**
	 * @return \Avalonia\Platform\IPlatformHandle
	 */
	public  function get_Handle(){}
	/**
	 * @param \Avalonia\Platform\IPlatformHandle $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Handle($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
