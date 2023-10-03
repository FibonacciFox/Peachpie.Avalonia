<?php
namespace Avalonia\Native;
/**
 */
class PopupEvents extends \Avalonia\Native\WindowBaseEvents implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\MicroCom\Runtime\IMicroComExceptionCallback,
	\Avalonia\Native\Interop\IAvnWindowBaseEvents,
	\Avalonia\Native\Interop\IAvnWindowEvents
{
	/**
	 * @return \System\Void|void
	 */
	public  function GotInputWhenDisabled(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Closing(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnWindowState $state
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WindowStateChanged($state){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Closed(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Activated(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Deactivated(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Paint(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnSize* $size
	 * @param \Avalonia\Native\Interop\AvnPlatformResizeReason $reason
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Resized($size, $reason){}
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $position
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PositionChanged($position){}
	/**
	 * @param \Avalonia\Native\Interop\AvnRawMouseEventType $type
	 * @param \System\UInt64 $timeStamp
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \Avalonia\Native\Interop\AvnVector $delta
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RawMouseEvent($type, $timeStamp, $modifiers, $point, $delta){}
	/**
	 * @param \Avalonia\Native\Interop\AvnRawKeyEventType $type
	 * @param \System\UInt64 $timeStamp
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \System\UInt32 $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RawKeyEvent($type, $timeStamp, $modifiers, $key){}
	/**
	 * @param \System\UInt64 $timeStamp
	 * @param \System\String|string $text
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RawTextInputEvent($timeStamp, $text){}
	/**
	 * @param \System\Double|double $scaling
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ScalingChanged($scaling){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RunRenderPriorityJobs(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LostFocus(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_AutomationPeer(){}
}
