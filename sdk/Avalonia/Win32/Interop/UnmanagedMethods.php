<?php
namespace Avalonia\Win32\Interop;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UnmanagedMethodsMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function SetDIBitsToDevice_1($hdc, $XDest, $YDest, $dwWidth, $dwHeight, $XSrc, $YSrc, $uStartScan, $cScanLines, $lpvBits, $lpbmi, $fuColorUse){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function SetDIBitsToDevice_2($hdc, $XDest, $YDest, $dwWidth, $dwHeight, $XSrc, $YSrc, $uStartScan, $cScanLines, $lpvBits, $lpbmi, $fuColorUse){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function InvalidateRect_1($hWnd, $lpRect, $bErase){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function InvalidateRect_2($hWnd, $lpRect, $bErase){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function CoCreateInstance_1($clsid, $ignore1, $ignore2, $iid, $pUnkOuter){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function CoCreateInstance_2($clsid, $ignore1, $ignore2, $iid, $pUnkOuter){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function DescribePixelFormat_1($hdc, $pfd){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function DescribePixelFormat_2($hdc, $iPixelFormat, $bytes, $pfd){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function RtlGetVersion_1($lpVersionInformation){}
	/**
	 * @return \System\Version
	 */
	#[MethodOverride] protected static function RtlGetVersion_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ImmGetCompositionString_1($hIMC, $dwIndex, $lpBuf, $dwBufLen){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function ImmGetCompositionString_2($hIMC, $dwIndex){}
}
/**
 */
class UnmanagedMethods extends \System\Object
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public readonly $DPI_AWARENESS_CONTEXT_UNAWARE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public readonly $DPI_AWARENESS_CONTEXT_SYSTEM_AWARE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public readonly $DPI_AWARENESS_CONTEXT_PER_MONITOR_AWARE;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public readonly $DPI_AWARENESS_CONTEXT_PER_MONITOR_AWARE_V2;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CW_USEDEFAULT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $SizeOf_BITMAPINFOHEADER;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $WAIT_FAILED;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $SORT_DEFAULT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $LANG_ZH;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $LANG_JA;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $LANG_KO;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CFS_FORCE_POSITION;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CFS_CANDIDATEPOS;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CFS_EXCLUDE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CFS_POINT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CFS_RECT;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $ISC_SHOWUICANDIDATEWINDOW;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $ISC_SHOWUICOMPOSITIONWINDOW;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $ISC_SHOWUIGUIDELINE;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $ISC_SHOWUIALLCANDIDATEWINDOW;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $ISC_SHOWUIALL;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $NI_COMPOSITIONSTR;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CPS_COMPLETE;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CPS_CONVERT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CPS_REVERT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CPS_CANCEL;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ShCoreAvailable;
	/**
	 * @param \System\UInt32 $cbSize
	 * @param \Avalonia\Win32\Interop\MOUSEMOVEPOINT* $pointsIn
	 * @param \Avalonia\Win32\Interop\MOUSEMOVEPOINT* $pointsBufferOut
	 * @param \System\Int32|int $nBufPoints
	 * @param \System\UInt32 $resolution
	 * @return \System\Int32|int
	 */
	protected static function GetMouseMovePointsEx($cbSize, $pointsIn, $pointsBufferOut, $nBufPoints, $resolution){}
	/**
	 * @return \System\Boolean
	 */
	public static function IsMouseInPointerEnabled(){}
	/**
	 * @param \System\Boolean $enable
	 * @return \System\Int32|int
	 */
	public static function EnableMouseInPointer($enable){}
	/**
	 * @param \System\UInt32 $pointerId
	 * @param \System\UInt32& $cursorId
	 * @return \System\Boolean
	 */
	public static function GetPointerCursorId($pointerId, $cursorId){}
	/**
	 * @param \System\UInt32 $pointerId
	 * @param \Avalonia\Win32\Interop\PointerInputType& $pointerType
	 * @return \System\Boolean
	 */
	public static function GetPointerType($pointerId, $pointerType){}
	/**
	 * @param \System\UInt32 $pointerId
	 * @param \Avalonia\Win32\Interop\POINTER_INFO& $pointerInfo
	 * @return \System\Boolean
	 */
	public static function GetPointerInfo($pointerId, $pointerInfo){}
	/**
	 * @param \System\UInt32 $pointerId
	 * @param \System\Int32& $entriesCount
	 * @param \Avalonia\Win32\Interop\POINTER_INFO[] $pointerInfos
	 * @return \System\Boolean
	 */
	public static function GetPointerInfoHistory($pointerId, $entriesCount, $pointerInfos){}
	/**
	 * @param \System\UInt32 $pointerId
	 * @param \Avalonia\Win32\Interop\POINTER_PEN_INFO& $penInfo
	 * @return \System\Boolean
	 */
	public static function GetPointerPenInfo($pointerId, $penInfo){}
	/**
	 * @param \System\UInt32 $pointerId
	 * @param \System\Int32& $entriesCount
	 * @param \Avalonia\Win32\Interop\POINTER_PEN_INFO[] $penInfos
	 * @return \System\Boolean
	 */
	public static function GetPointerPenInfoHistory($pointerId, $entriesCount, $penInfos){}
	/**
	 * @param \System\UInt32 $pointerId
	 * @param \Avalonia\Win32\Interop\POINTER_TOUCH_INFO& $touchInfo
	 * @return \System\Boolean
	 */
	public static function GetPointerTouchInfo($pointerId, $touchInfo){}
	/**
	 * @param \System\UInt32 $pointerId
	 * @param \System\Int32& $entriesCount
	 * @param \Avalonia\Win32\Interop\POINTER_TOUCH_INFO[] $touchInfos
	 * @return \System\Boolean
	 */
	public static function GetPointerTouchInfoHistory($pointerId, $entriesCount, $touchInfos){}
	/**
	 * @param \System\IntPtr $hdc
	 * @param \System\IntPtr $lprcClip
	 * @param \Avalonia\Win32\Interop\MonitorEnumDelegate $lpfnEnum
	 * @param \System\IntPtr $dwData
	 * @return \System\Boolean
	 */
	public static function EnumDisplayMonitors($hdc, $lprcClip, $lpfnEnum, $dwData){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\IntPtr
	 */
	public static function GetDC($hWnd){}
	/**
	 * @uses UnmanagedMethodsMethodsOverride::SetDIBitsToDevice_1 ($hdc, $XDest, $YDest, $dwWidth, $dwHeight, $XSrc, $YSrc, $uStartScan, $cScanLines, $lpvBits, $lpbmi, $fuColorUse)
	 * @uses UnmanagedMethodsMethodsOverride::SetDIBitsToDevice_2 ($hdc, $XDest, $YDest, $dwWidth, $dwHeight, $XSrc, $YSrc, $uStartScan, $cScanLines, $lpvBits, $lpbmi, $fuColorUse)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetDIBitsToDevice(mixed ...$args){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\IntPtr $hDC
	 * @return \System\Boolean
	 */
	public static function ReleaseDC($hWnd, $hDC){}
	/**
	 * @param \Avalonia\Win32\Interop\RECT& $lpRect
	 * @param \System\UInt32 $dwStyle
	 * @param \System\Boolean $bMenu
	 * @param \System\UInt32 $dwExStyle
	 * @return \System\Boolean
	 */
	public static function AdjustWindowRectEx($lpRect, $dwStyle, $bMenu, $dwExStyle){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \Avalonia\Win32\Interop\PAINTSTRUCT& $lpPaint
	 * @return \System\IntPtr
	 */
	public static function BeginPaint($hwnd, $lpPaint){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\Interop\POINT& $lpPoint
	 * @return \System\Boolean
	 */
	public static function ClientToScreen($hWnd, $lpPoint){}
	/**
	 * @param \System\Int32|int $dwExStyle
	 * @param \System\UInt32 $lpClassName
	 * @param \System\String|string $lpWindowName
	 * @param \System\UInt32 $dwStyle
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @param \System\Int32|int $nWidth
	 * @param \System\Int32|int $nHeight
	 * @param \System\IntPtr $hWndParent
	 * @param \System\IntPtr $hMenu
	 * @param \System\IntPtr $hInstance
	 * @param \System\IntPtr $lpParam
	 * @return \System\IntPtr
	 */
	public static function CreateWindowEx($dwExStyle, $lpClassName, $lpWindowName, $dwStyle, $x, $y, $nWidth, $nHeight, $hWndParent, $hMenu, $hInstance, $lpParam){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $msg
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @return \System\IntPtr
	 */
	public static function DefWindowProc($hWnd, $msg, $wParam, $lParam){}
	/**
	 * @param \Avalonia\Win32\Interop\MSG& $lpmsg
	 * @return \System\IntPtr
	 */
	public static function DispatchMessage($lpmsg){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @return \System\Boolean
	 */
	public static function DestroyWindow($hwnd){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Boolean $bEnable
	 * @return \System\Boolean
	 */
	public static function EnableWindow($hWnd, $bEnable){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\Interop\PAINTSTRUCT& $lpPaint
	 * @return \System\Boolean
	 */
	public static function EndPaint($hWnd, $lpPaint){}
	/**
	 * @return \System\UInt32
	 */
	public static function GetCaretBlinkTime(){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \Avalonia\Win32\Interop\RECT& $lpRect
	 * @return \System\Boolean
	 */
	public static function GetClientRect($hwnd, $lpRect){}
	/**
	 * @param \Avalonia\Win32\Interop\POINT& $lpPoint
	 * @return \System\Boolean
	 */
	public static function GetCursorPos($lpPoint){}
	/**
	 * @return \System\UInt32
	 */
	public static function GetDoubleClickTime(){}
	/**
	 * @param \System\Byte[] $lpKeyState
	 * @return \System\Boolean
	 */
	public static function GetKeyboardState($lpKeyState){}
	/**
	 * @param \System\UInt32 $uCode
	 * @param \System\UInt32 $uMapType
	 * @return \System\UInt32
	 */
	public static function MapVirtualKey($uCode, $uMapType){}
	/**
	 * @param \Avalonia\Win32\Interop\MSG& $lpMsg
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $wMsgFilterMin
	 * @param \System\UInt32 $wMsgFilterMax
	 * @return \System\Int32|int
	 */
	public static function GetMessage($lpMsg, $hWnd, $wMsgFilterMin, $wMsgFilterMax){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetMessageTime(){}
	/**
	 * @param \System\String|string $lpModuleName
	 * @return \System\IntPtr
	 */
	public static function GetModuleHandle($lpModuleName){}
	/**
	 * @param \Avalonia\Win32\Interop\SystemMetric $smIndex
	 * @return \System\Int32|int
	 */
	public static function GetSystemMetrics($smIndex){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $nIndex
	 * @return \System\UInt32
	 */
	public static function GetWindowLongPtr($hWnd, $nIndex){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $nIndex
	 * @return \System\UInt32
	 */
	public static function GetWindowLong32b($hWnd, $nIndex){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $nIndex
	 * @return \System\UInt32
	 */
	public static function GetWindowLong($hWnd, $nIndex){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $nIndex
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetWindowLong32b($hWnd, $nIndex, $value){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $nIndex
	 * @param \System\IntPtr $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetWindowLong64b($hWnd, $nIndex, $value){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $nIndex
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	public static function SetWindowLong($hWnd, $nIndex, $value){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $nIndex
	 * @param \System\IntPtr $handle
	 * @return \System\IntPtr
	 */
	public static function SetWindowLongPtr($hWnd, $nIndex, $handle){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Boolean $bRevert
	 * @return \System\IntPtr
	 */
	public static function GetSystemMenu($hWnd, $bRevert){}
	/**
	 * @param \System\IntPtr $hMenu
	 * @param \System\UInt32 $uIDEnableItem
	 * @param \System\UInt32 $uEnable
	 * @return \System\Boolean
	 */
	public static function EnableMenuItem($hMenu, $uIDEnableItem, $uEnable){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\Interop\WINDOWPLACEMENT& $lpwndpl
	 * @return \System\Boolean
	 */
	public static function GetWindowPlacement($hWnd, $lpwndpl){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \Avalonia\Win32\Interop\RECT& $lpRect
	 * @return \System\Boolean
	 */
	public static function GetWindowRect($hwnd, $lpRect){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \Avalonia\Win32\Interop\RECT& $lpRect
	 * @param \System\Boolean $bErase
	 * @return \System\Boolean
	 */
	public static function GetUpdateRect($hwnd, $lpRect, $bErase){}
	/**
	 * @uses UnmanagedMethodsMethodsOverride::InvalidateRect_1 ($hWnd, $lpRect, $bErase)
	 * @uses UnmanagedMethodsMethodsOverride::InvalidateRect_2 ($hWnd, $lpRect, $bErase)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function InvalidateRect(mixed ...$args){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\IntPtr $lpRect
	 * @return \System\Boolean
	 */
	public static function ValidateRect($hWnd, $lpRect){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\Boolean
	 */
	public static function IsWindow($hWnd){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\Boolean
	 */
	public static function IsWindowEnabled($hWnd){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\Boolean
	 */
	public static function IsWindowUnicode($hWnd){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\Boolean
	 */
	public static function IsWindowVisible($hWnd){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\IntPtr $uIDEvent
	 * @return \System\Boolean
	 */
	public static function KillTimer($hWnd, $uIDEvent){}
	/**
	 * @param \System\IntPtr $hInstance
	 * @param \System\IntPtr $lpCursorName
	 * @return \System\IntPtr
	 */
	public static function LoadCursor($hInstance, $lpCursorName){}
	/**
	 * @param \Avalonia\Win32\Interop\ICONINFO& $iconInfo
	 * @return \System\IntPtr
	 */
	public static function CreateIconIndirect($iconInfo){}
	/**
	 * @param \System\IntPtr $hIcon
	 * @return \System\Boolean
	 */
	public static function DestroyIcon($hIcon){}
	/**
	 * @param \Avalonia\Win32\Interop\MSG& $lpMsg
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $wMsgFilterMin
	 * @param \System\UInt32 $wMsgFilterMax
	 * @param \System\UInt32 $wRemoveMsg
	 * @return \System\Boolean
	 */
	public static function PeekMessage($lpMsg, $hWnd, $wMsgFilterMin, $wMsgFilterMax, $wRemoveMsg){}
	/**
	 * @return \System\IntPtr
	 */
	public static function GetMessageExtraInfo(){}
	/**
	 * @param \Avalonia\Win32\Interop\WNDCLASSEX& $lpwcx
	 * @return \System\UInt16
	 */
	public static function RegisterClassEx($lpwcx){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $flags
	 * @return \System\Void|void
	 */
	public static function RegisterTouchWindow($hWnd, $flags){}
	/**
	 * @return \System\Boolean
	 */
	public static function ReleaseCapture(){}
	/**
	 * @param \System\String|string $lpString
	 * @return \System\UInt32
	 */
	public static function RegisterWindowMessage($lpString){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\Interop\POINT& $lpPoint
	 * @return \System\Boolean
	 */
	public static function ScreenToClient($hWnd, $lpPoint){}
	/**
	 * @return \System\IntPtr
	 */
	public static function GetActiveWindow(){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\IntPtr
	 */
	public static function SetActiveWindow($hWnd){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\Boolean
	 */
	public static function SetForegroundWindow($hWnd){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\IntPtr
	 */
	public static function SetCapture($hWnd){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\IntPtr $nIDEvent
	 * @param \System\UInt32 $uElapse
	 * @param \Avalonia\Win32\Interop\TimerProc $lpTimerFunc
	 * @return \System\IntPtr
	 */
	public static function SetTimer($hWnd, $nIDEvent, $uElapse, $lpTimerFunc){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $X
	 * @param \System\Int32|int $Y
	 * @param \System\Int32|int $nWidth
	 * @param \System\Int32|int $nHeight
	 * @param \System\Boolean $bRepaint
	 * @return \System\Boolean
	 */
	public static function MoveWindow($hWnd, $X, $Y, $nWidth, $nHeight, $bRepaint){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\IntPtr $hWndInsertAfter
	 * @param \System\Int32|int $x
	 * @param \System\Int32|int $y
	 * @param \System\Int32|int $cx
	 * @param \System\Int32|int $cy
	 * @param \Avalonia\Win32\Interop\SetWindowPosFlags $uFlags
	 * @return \System\Boolean
	 */
	public static function SetWindowPos($hWnd, $hWndInsertAfter, $x, $y, $cx, $cy, $uFlags){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\Boolean
	 */
	public static function SetFocus($hWnd){}
	/**
	 * @return \System\IntPtr
	 */
	public static function GetFocus(){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\IntPtr $hWndNewParent
	 * @return \System\Boolean
	 */
	public static function SetParent($hWnd, $hWndNewParent){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\IntPtr
	 */
	public static function GetParent($hWnd){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \Avalonia\Win32\Interop\GetAncestorFlags $gaFlags
	 * @return \System\IntPtr
	 */
	public static function GetAncestor($hwnd, $gaFlags){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\Interop\ShowWindowCommand $nCmdShow
	 * @return \System\Boolean
	 */
	public static function ShowWindow($hWnd, $nCmdShow){}
	/**
	 * @return \System\IntPtr
	 */
	public static function CreateTimerQueue(){}
	/**
	 * @param \System\IntPtr $TimerQueue
	 * @param \System\IntPtr $CompletionEvent
	 * @return \System\Boolean
	 */
	public static function DeleteTimerQueueEx($TimerQueue, $CompletionEvent){}
	/**
	 * @param \System\IntPtr& $phNewTimer
	 * @param \System\IntPtr $TimerQueue
	 * @param \Avalonia\Win32\Interop\WaitOrTimerCallback $Callback
	 * @param \System\IntPtr $Parameter
	 * @param \System\UInt32 $DueTime
	 * @param \System\UInt32 $Period
	 * @param \System\UInt32 $Flags
	 * @return \System\Boolean
	 */
	public static function CreateTimerQueueTimer($phNewTimer, $TimerQueue, $Callback, $Parameter, $DueTime, $Period, $Flags){}
	/**
	 * @param \System\IntPtr $TimerQueue
	 * @param \System\IntPtr $Timer
	 * @param \System\IntPtr $CompletionEvent
	 * @return \System\Boolean
	 */
	public static function DeleteTimerQueueTimer($TimerQueue, $Timer, $CompletionEvent){}
	/**
	 * @param \System\UInt32 $virtualKeyCode
	 * @param \System\UInt32 $scanCode
	 * @param \System\Byte[] $keyboardState
	 * @param \System\Text\StringBuilder $receivingBuffer
	 * @param \System\Int32|int $bufferSize
	 * @param \System\UInt32 $flags
	 * @return \System\Int32|int
	 */
	public static function ToUnicode($virtualKeyCode, $scanCode, $keyboardState, $receivingBuffer, $bufferSize, $flags){}
	/**
	 * @param \Avalonia\Win32\Interop\TRACKMOUSEEVENT& $lpEventTrack
	 * @return \System\Boolean
	 */
	public static function TrackMouseEvent($lpEventTrack){}
	/**
	 * @param \Avalonia\Win32\Interop\MSG& $lpMsg
	 * @return \System\Boolean
	 */
	public static function TranslateMessage($lpMsg){}
	/**
	 * @param \System\String|string $lpClassName
	 * @param \System\IntPtr $hInstance
	 * @return \System\Boolean
	 */
	public static function UnregisterClass($lpClassName, $hInstance){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \System\String|string $lpString
	 * @return \System\Boolean
	 */
	public static function SetWindowText($hwnd, $lpString){}
	/**
	 * @param \Avalonia\Win32\Interop\NIM $dwMessage
	 * @param \Avalonia\Win32\Interop\NOTIFYICONDATA $lpData
	 * @return \System\Int32|int
	 */
	public static function Shell_NotifyIcon($dwMessage, $lpData){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\Interop\ClassLongIndex $nIndex
	 * @param \System\IntPtr $dwNewLong
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetClassLong64($hWnd, $nIndex, $dwNewLong){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\Interop\ClassLongIndex $nIndex
	 * @param \System\IntPtr $dwNewLong
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SetClassLong32($hWnd, $nIndex, $dwNewLong){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \Avalonia\Win32\Interop\ClassLongIndex $nIndex
	 * @param \System\IntPtr $dwNewLong
	 * @return \System\IntPtr
	 */
	public static function SetClassLong($hWnd, $nIndex, $dwNewLong){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $nIndex
	 * @return \System\IntPtr
	 */
	public static function GetClassLongPtr($hWnd, $nIndex){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $nIndex
	 * @return \System\UInt32
	 */
	public static function GetClassLongPtr32($hWnd, $nIndex){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\Int32|int $nIndex
	 * @return \System\IntPtr
	 */
	public static function GetClassLongPtr64($hWnd, $nIndex){}
	/**
	 * @param \System\IntPtr $hCursor
	 * @return \System\IntPtr
	 */
	protected static function SetCursor($hCursor){}
	/**
	 * @uses UnmanagedMethodsMethodsOverride::CoCreateInstance_1 ($clsid, $ignore1, $ignore2, $iid, $pUnkOuter)
	 * @uses UnmanagedMethodsMethodsOverride::CoCreateInstance_2 ($clsid, $ignore1, $ignore2, $iid, $pUnkOuter)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CoCreateInstance(mixed ...$args){}
	/**
	 * @param \System\Guid& $clsid
	 * @param \System\Guid& $iid
	 * @return \Avalonia\Win32\Interop\T
	 */
	protected static function CreateInstance($clsid, $iid){}
	/**
	 * @param \System\String|string $pszPath
	 * @param \System\IntPtr $pbc
	 * @param \System\Guid& $riid
	 * @param \System\IntPtr& $ppv
	 * @return \System\Int32|int
	 */
	protected static function SHCreateItemFromParsingName($pszPath, $pbc, $riid, $ppv){}
	/**
	 * @param \System\IntPtr $hWndOwner
	 * @return \System\Boolean
	 */
	public static function OpenClipboard($hWndOwner){}
	/**
	 * @return \System\Boolean
	 */
	public static function CloseClipboard(){}
	/**
	 * @return \System\Boolean
	 */
	public static function EmptyClipboard(){}
	/**
	 * @param \Avalonia\Win32\Interop\ClipboardFormat $uFormat
	 * @return \System\IntPtr
	 */
	public static function GetClipboardData($uFormat){}
	/**
	 * @param \Avalonia\Win32\Interop\ClipboardFormat $uFormat
	 * @param \System\IntPtr $hMem
	 * @return \System\IntPtr
	 */
	public static function SetClipboardData($uFormat, $hMem){}
	/**
	 * @param \System\IntPtr& $dataObject
	 * @return \System\Int32|int
	 */
	public static function OleGetClipboard($dataObject){}
	/**
	 * @param \System\IntPtr $dataObject
	 * @return \System\Int32|int
	 */
	public static function OleSetClipboard($dataObject){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\IntPtr
	 */
	public static function GlobalLock($handle){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Boolean
	 */
	public static function GlobalUnlock($handle){}
	/**
	 * @param \System\Int32|int $uFlags
	 * @param \System\Int32|int $dwBytes
	 * @return \System\IntPtr
	 */
	public static function GlobalAlloc($uFlags, $dwBytes){}
	/**
	 * @param \System\IntPtr $hMem
	 * @return \System\IntPtr
	 */
	public static function GlobalFree($hMem){}
	/**
	 * @param \System\String|string $fileName
	 * @return \System\IntPtr
	 */
	public static function LoadLibrary($fileName){}
	/**
	 * @param \System\String|string $fileName
	 * @param \System\IntPtr $hFile
	 * @param \System\Int32|int $flags
	 * @return \System\IntPtr
	 */
	public static function LoadLibraryEx($fileName, $hFile, $flags){}
	/**
	 * @param \System\IntPtr $hModule
	 * @param \System\String|string $lpProcName
	 * @return \System\IntPtr
	 */
	public static function GetProcAddress($hModule, $lpProcName){}
	/**
	 * @param \System\IntPtr $lpofn
	 * @return \System\Boolean
	 */
	public static function GetSaveFileName($lpofn){}
	/**
	 * @param \System\IntPtr $lpofn
	 * @return \System\Boolean
	 */
	public static function GetOpenFileName($lpofn){}
	/**
	 * @return \System\Int32|int
	 */
	public static function CommDlgExtendedError(){}
	/**
	 * @return \System\Boolean
	 */
	public static function get_ShCoreAvailable(){}
	/**
	 * @param \Avalonia\Win32\Interop\PROCESS_DPI_AWARENESS $value
	 * @return \System\Void|void
	 */
	public static function SetProcessDpiAwareness($value){}
	/**
	 * @param \System\IntPtr $dpiAWarenessContext
	 * @return \System\Boolean
	 */
	public static function SetProcessDpiAwarenessContext($dpiAWarenessContext){}
	/**
	 * @param \System\IntPtr $hmonitor
	 * @param \Avalonia\Win32\Interop\MONITOR_DPI_TYPE $dpiType
	 * @param \System\UInt32& $dpiX
	 * @param \System\UInt32& $dpiY
	 * @return \System\Int64|int
	 */
	public static function GetDpiForMonitor($hmonitor, $dpiType, $dpiX, $dpiY){}
	/**
	 * @param \System\IntPtr $hdc
	 * @param \Avalonia\Win32\Interop\DEVICECAP $nIndex
	 * @return \System\Int32|int
	 */
	public static function GetDeviceCaps($hdc, $nIndex){}
	/**
	 * @param \System\IntPtr $hMon
	 * @param \System\UInt32& $pScale
	 * @return \System\Void|void
	 */
	public static function GetScaleFactorForMonitor($hMon, $pScale){}
	/**
	 * @return \System\Boolean
	 */
	public static function SetProcessDPIAware(){}
	/**
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Interop\MONITOR $dwFlags
	 * @return \System\IntPtr
	 */
	public static function MonitorFromPoint($pt, $dwFlags){}
	/**
	 * @param \Avalonia\Win32\Interop\RECT $rect
	 * @param \Avalonia\Win32\Interop\MONITOR $dwFlags
	 * @return \System\IntPtr
	 */
	public static function MonitorFromRect($rect, $dwFlags){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \Avalonia\Win32\Interop\MONITOR $dwFlags
	 * @return \System\IntPtr
	 */
	public static function MonitorFromWindow($hwnd, $dwFlags){}
	/**
	 * @param \System\IntPtr $hMonitor
	 * @param \Avalonia\Win32\Interop\MONITORINFO& $lpmi
	 * @return \System\Boolean
	 */
	public static function GetMonitorInfo($hMonitor, $lpmi){}
	/**
	 * @param \System\IntPtr $hTouchInput
	 * @param \System\UInt32 $cInputs
	 * @param \Avalonia\Win32\Interop\TOUCHINPUT* $pInputs
	 * @param \System\Int32|int $cbSize
	 * @return \System\Boolean
	 */
	public static function GetTouchInputInfo($hTouchInput, $cInputs, $pInputs, $cbSize){}
	/**
	 * @param \System\IntPtr $hTouchInput
	 * @return \System\Boolean
	 */
	public static function CloseTouchInputHandle($hTouchInput){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $Msg
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @return \System\Boolean
	 */
	public static function PostMessage($hWnd, $Msg, $wParam, $lParam){}
	/**
	 * @param \System\IntPtr $hObject
	 * @return \System\Boolean
	 */
	public static function CloseHandle($hObject){}
	/**
	 * @param \System\IntPtr $hDC
	 * @param \Avalonia\Win32\Interop\BITMAPINFOHEADER& $pBitmapInfo
	 * @param \System\Int32|int $un
	 * @param \System\IntPtr& $lplpVoid
	 * @param \System\IntPtr $handle
	 * @param \System\Int32|int $dw
	 * @return \System\IntPtr
	 */
	public static function CreateDIBSection($hDC, $pBitmapInfo, $un, $lplpVoid, $handle, $dw){}
	/**
	 * @param \System\IntPtr $hObject
	 * @return \System\Int32|int
	 */
	public static function DeleteObject($hObject){}
	/**
	 * @param \System\IntPtr $hdc
	 * @return \System\IntPtr
	 */
	public static function CreateCompatibleDC($hdc){}
	/**
	 * @param \System\IntPtr $hdc
	 * @param \System\IntPtr $hObject
	 * @return \System\IntPtr
	 */
	public static function SelectObject($hdc, $hObject){}
	/**
	 * @param \System\IntPtr $hdc
	 * @param \Avalonia\Win32\Interop\PixelFormatDescriptor& $pfd
	 * @return \System\Int32|int
	 */
	public static function ChoosePixelFormat($hdc, $pfd){}
	/**
	 * @uses UnmanagedMethodsMethodsOverride::DescribePixelFormat_1 ($hdc, $pfd)
	 * @uses UnmanagedMethodsMethodsOverride::DescribePixelFormat_2 ($hdc, $iPixelFormat, $bytes, $pfd)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DescribePixelFormat(mixed ...$args){}
	/**
	 * @param \System\IntPtr $hdc
	 * @param \System\Int32|int $iPixelFormat
	 * @param \Avalonia\Win32\Interop\PixelFormatDescriptor& $pfd
	 * @return \System\Int32|int
	 */
	public static function SetPixelFormat($hdc, $iPixelFormat, $pfd){}
	/**
	 * @param \System\IntPtr $hdc
	 * @return \System\Boolean
	 */
	public static function SwapBuffers($hdc){}
	/**
	 * @param \System\IntPtr $hdc
	 * @return \System\IntPtr
	 */
	public static function wglCreateContext($hdc){}
	/**
	 * @param \System\IntPtr $context
	 * @return \System\Boolean
	 */
	public static function wglDeleteContext($context){}
	/**
	 * @param \System\IntPtr $hdc
	 * @param \System\IntPtr $context
	 * @return \System\Boolean
	 */
	public static function wglMakeCurrent($hdc, $context){}
	/**
	 * @return \System\IntPtr
	 */
	public static function wglGetCurrentContext(){}
	/**
	 * @return \System\IntPtr
	 */
	public static function wglGetCurrentDC(){}
	/**
	 * @param \System\String|string $name
	 * @return \System\IntPtr
	 */
	public static function wglGetProcAddress($name){}
	/**
	 * @param \System\IntPtr $hFile
	 * @param \System\IntPtr $lpFileMappingAttributes
	 * @param \System\UInt32 $flProtect
	 * @param \System\UInt32 $dwMaximumSizeHigh
	 * @param \System\UInt32 $dwMaximumSizeLow
	 * @param \System\String|string $lpName
	 * @return \System\IntPtr
	 */
	public static function CreateFileMapping($hFile, $lpFileMappingAttributes, $flProtect, $dwMaximumSizeHigh, $dwMaximumSizeLow, $lpName){}
	/**
	 * @param \System\IntPtr $dest
	 * @param \System\IntPtr $src
	 * @param \System\UIntPtr $count
	 * @return \System\IntPtr
	 */
	public static function CopyMemory($dest, $src, $count){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \System\IntPtr $target
	 * @return \Avalonia\Win32\Interop\HRESULT
	 */
	public static function RegisterDragDrop($hwnd, $target){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @return \Avalonia\Win32\Interop\HRESULT
	 */
	public static function RevokeDragDrop($hwnd){}
	/**
	 * @param \System\IntPtr $val
	 * @return \Avalonia\Win32\Interop\HRESULT
	 */
	public static function OleInitialize($val){}
	/**
	 * @param \Avalonia\Win32\Interop\STGMEDIUM& $medium
	 * @return \System\Void|void
	 */
	protected static function ReleaseStgMedium($medium){}
	/**
	 * @param \System\Int32|int $format
	 * @param \System\Text\StringBuilder $lpString
	 * @param \System\Int32|int $cchMax
	 * @return \System\Int32|int
	 */
	public static function GetClipboardFormatName($format, $lpString, $cchMax){}
	/**
	 * @param \System\String|string $format
	 * @return \System\Int32|int
	 */
	public static function RegisterClipboardFormat($format){}
	/**
	 * @param \System\IntPtr $hGlobal
	 * @return \System\IntPtr
	 */
	public static function GlobalSize($hGlobal){}
	/**
	 * @param \System\IntPtr $hDrop
	 * @param \System\Int32|int $iFile
	 * @param \System\Text\StringBuilder $lpszFile
	 * @param \System\Int32|int $cch
	 * @return \System\Int32|int
	 */
	public static function DragQueryFile($hDrop, $iFile, $lpszFile, $cch){}
	/**
	 * @param \System\IntPtr $dataObject
	 * @param \System\IntPtr $dropSource
	 * @param \System\Int32|int $allowedEffects
	 * @param \System\Int32& $finalEffect
	 * @return \System\Void|void
	 */
	protected static function DoDragDrop($dataObject, $dropSource, $allowedEffects, $finalEffect){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \Avalonia\Win32\Interop\MARGINS& $margins
	 * @return \System\Int32|int
	 */
	public static function DwmExtendFrameIntoClientArea($hwnd, $margins){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \System\Int32|int $dwAttribute
	 * @param \Avalonia\Win32\Interop\RECT& $pvAttribute
	 * @param \System\Int32|int $cbAttribute
	 * @return \System\Int32|int
	 */
	public static function DwmGetWindowAttribute($hwnd, $dwAttribute, $pvAttribute, $cbAttribute){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \System\Int32|int $dwAttribute
	 * @param \System\Void* $pvAttribute
	 * @param \System\Int32|int $cbAttribute
	 * @return \System\Int32|int
	 */
	public static function DwmSetWindowAttribute($hwnd, $dwAttribute, $pvAttribute, $cbAttribute){}
	/**
	 * @param \System\Boolean& $enabled
	 * @return \System\Int32|int
	 */
	public static function DwmIsCompositionEnabled($enabled){}
	/**
	 * @return \System\Void|void
	 */
	public static function DwmFlush(){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\UInt32 $msg
	 * @param \System\IntPtr $wParam
	 * @param \System\IntPtr $lParam
	 * @param \System\IntPtr& $plResult
	 * @return \System\Boolean
	 */
	public static function DwmDefWindowProc($hWnd, $msg, $wParam, $lParam, $plResult){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \Avalonia\Win32\Interop\DWM_BLURBEHIND& $blurBehind
	 * @return \System\Void|void
	 */
	public static function DwmEnableBlurBehindWindow($hwnd, $blurBehind){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \System\UInt32 $crKey
	 * @param \System\Byte $bAlpha
	 * @param \Avalonia\Win32\Interop\LayeredWindowFlags $dwFlags
	 * @return \System\Boolean
	 */
	public static function SetLayeredWindowAttributes($hwnd, $crKey, $bAlpha, $dwFlags){}
	/**
	 * @uses UnmanagedMethodsMethodsOverride::RtlGetVersion_1 ($lpVersionInformation)
	 * @uses UnmanagedMethodsMethodsOverride::RtlGetVersion_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RtlGetVersion(mixed ...$args){}
	/**
	 * @param \System\Int32|int $nCount
	 * @param \System\IntPtr[] $pHandles
	 * @param \System\Boolean $bWaitAll
	 * @param \System\Int32|int $dwMilliseconds
	 * @param \System\Boolean $bAlertable
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IntWaitForMultipleObjectsEx($nCount, $pHandles, $bWaitAll, $dwMilliseconds, $bAlertable){}
	/**
	 * @param \System\Int32|int $nCount
	 * @param \System\IntPtr[] $pHandles
	 * @param \System\Boolean $bWaitAll
	 * @param \System\Int32|int $dwMilliseconds
	 * @param \System\Boolean $bAlertable
	 * @return \System\Int32|int
	 */
	protected static function WaitForMultipleObjectsEx($nCount, $pHandles, $bWaitAll, $dwMilliseconds, $bAlertable){}
	/**
	 * @param \System\Int32|int $nCount
	 * @param \System\IntPtr[] $pHandles
	 * @param \System\Int32|int $dwMilliseconds
	 * @param \Avalonia\Win32\Interop\QueueStatusFlags $dwWakeMask
	 * @param \Avalonia\Win32\Interop\MsgWaitForMultipleObjectsFlags $dwFlags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IntMsgWaitForMultipleObjectsEx($nCount, $pHandles, $dwMilliseconds, $dwWakeMask, $dwFlags){}
	/**
	 * @param \System\Int32|int $nCount
	 * @param \System\IntPtr[] $pHandles
	 * @param \System\Int32|int $dwMilliseconds
	 * @param \Avalonia\Win32\Interop\QueueStatusFlags $dwWakeMask
	 * @param \Avalonia\Win32\Interop\MsgWaitForMultipleObjectsFlags $dwFlags
	 * @return \System\Int32|int
	 */
	protected static function MsgWaitForMultipleObjectsEx($nCount, $pHandles, $dwMilliseconds, $dwWakeMask, $dwFlags){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \Avalonia\Win32\Interop\WindowCompositionAttributeData& $data
	 * @return \System\Int32|int
	 */
	protected static function SetWindowCompositionAttribute($hwnd, $data){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\IntPtr
	 */
	public static function ImmGetContext($hWnd){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\IntPtr $hIMC
	 * @return \System\IntPtr
	 */
	public static function ImmAssociateContext($hWnd, $hIMC){}
	/**
	 * @return \System\IntPtr
	 */
	public static function ImmCreateContext(){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @param \System\IntPtr $hIMC
	 * @return \System\Boolean
	 */
	public static function ImmReleaseContext($hWnd, $hIMC){}
	/**
	 * @param \System\IntPtr $hIMC
	 * @param \System\Boolean $flag
	 * @return \System\Boolean
	 */
	public static function ImmSetOpenStatus($hIMC, $flag){}
	/**
	 * @param \System\IntPtr $hIMC
	 * @param \System\Boolean $flag
	 * @return \System\Boolean
	 */
	public static function ImmSetActiveContext($hIMC, $flag){}
	/**
	 * @param \System\IntPtr $hIMC
	 * @param \Avalonia\Win32\Interop\POINT& $lpptPos
	 * @return \System\Boolean
	 */
	public static function ImmSetStatusWindowPos($hIMC, $lpptPos){}
	/**
	 * @param \System\IntPtr $HKL
	 * @return \System\Boolean
	 */
	public static function ImmIsIME($HKL){}
	/**
	 * @param \System\IntPtr $hIMC
	 * @param \Avalonia\Win32\Interop\CANDIDATEFORM& $lpCandidate
	 * @return \System\Boolean
	 */
	public static function ImmSetCandidateWindow($hIMC, $lpCandidate){}
	/**
	 * @param \System\IntPtr $hIMC
	 * @param \Avalonia\Win32\Interop\COMPOSITIONFORM& $lpComp
	 * @return \System\Boolean
	 */
	public static function ImmSetCompositionWindow($hIMC, $lpComp){}
	/**
	 * @param \System\IntPtr $hIMC
	 * @param \Avalonia\Win32\Interop\LOGFONT& $lf
	 * @return \System\Boolean
	 */
	public static function ImmSetCompositionFont($hIMC, $lf){}
	/**
	 * @uses UnmanagedMethodsMethodsOverride::ImmGetCompositionString_1 ($hIMC, $dwIndex, $lpBuf, $dwBufLen)
	 * @uses UnmanagedMethodsMethodsOverride::ImmGetCompositionString_2 ($hIMC, $dwIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ImmGetCompositionString(mixed ...$args){}
	/**
	 * @param \System\IntPtr $hIMC
	 * @param \System\Int32|int $dwAction
	 * @param \System\Int32|int $dwIndex
	 * @param \System\Int32|int $dwValue
	 * @return \System\Boolean
	 */
	public static function ImmNotifyIME($hIMC, $dwAction, $dwIndex, $dwValue){}
	/**
	 * @param \System\IntPtr $hwnd
	 * @param \System\IntPtr $hBitmap
	 * @param \System\Int32|int $nWidth
	 * @param \System\Int32|int $nHeight
	 * @return \System\Boolean
	 */
	public static function CreateCaret($hwnd, $hBitmap, $nWidth, $nHeight){}
	/**
	 * @param \System\Int32|int $X
	 * @param \System\Int32|int $Y
	 * @return \System\Boolean
	 */
	public static function SetCaretPos($X, $Y){}
	/**
	 * @return \System\Boolean
	 */
	public static function DestroyCaret(){}
	/**
	 * @param \System\Int32|int $idThread
	 * @return \System\IntPtr
	 */
	public static function GetKeyboardLayout($idThread){}
	/**
	 * @param \System\UInt32 $Locale
	 * @param \System\Text\StringBuilder $lpName
	 * @param \System\Int32|int $cchName
	 * @param \System\Int32|int $dwFlags
	 * @return \System\Int32|int
	 */
	public static function LCIDToLocaleName($Locale, $lpName, $cchName, $dwFlags){}
	/**
	 * @param \System\UInt32 $lgid
	 * @param \System\UInt32 $srtid
	 * @return \System\UInt32
	 */
	public static function MAKELCID($lgid, $srtid){}
	/**
	 * @param \System\UInt32 $lgid
	 * @return \System\UInt16
	 */
	public static function PRIMARYLANGID($lgid){}
	/**
	 * @param \System\IntPtr $HKL
	 * @return \System\UInt32
	 */
	public static function LGID($HKL){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
