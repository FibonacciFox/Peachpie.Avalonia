<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnWindowBaseEventsVTableMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_1($d){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_2($m){}
}
/**
 */
class __MicroComIAvnWindowBaseEventsVTable extends \MicroCom\Runtime\MicroComVtblBase
{
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Paint($this){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Closed($this){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Activated($this){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Deactivated($this){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnSize* $size
	 * @param \Avalonia\Native\Interop\AvnPlatformResizeReason $reason
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Resized($this, $size, $reason){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnPoint $position
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PositionChanged($this, $position){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnRawMouseEventType $type
	 * @param \System\UInt64 $timeStamp
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \Avalonia\Native\Interop\AvnPoint $point
	 * @param \Avalonia\Native\Interop\AvnVector $delta
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RawMouseEvent($this, $type, $timeStamp, $modifiers, $point, $delta){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnRawKeyEventType $type
	 * @param \System\UInt64 $timeStamp
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \System\UInt32 $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RawKeyEvent($this, $type, $timeStamp, $modifiers, $key){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt64 $timeStamp
	 * @param \System\Byte* $text
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RawTextInputEvent($this, $timeStamp, $text){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Double|double $scaling
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ScalingChanged($this, $scaling){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RunRenderPriorityJobs($this){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LostFocus($this){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Native\Interop\AvnDragEventType $type
	 * @param \Avalonia\Native\Interop\AvnPoint $position
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effects
	 * @param \System\Void* $clipboard
	 * @param \System\IntPtr $dataObjectHandle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DragEvent($this, $type, $position, $modifiers, $effects, $clipboard, $dataObjectHandle){}
	/**
	 * @param \System\Void* $this
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAutomationPeer($this){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnWindowBaseEventsVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIAvnWindowBaseEventsVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
