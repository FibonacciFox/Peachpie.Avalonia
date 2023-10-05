<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnWindowBaseEventsProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class __MicroComIAvnWindowBaseEventsProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnWindowBaseEvents
{
	/**
	 * @var \Avalonia\Native\Interop\IAvnAutomationPeer
	 * @property
	 */
	public readonly $AutomationPeer;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $NativePointer;
	/**
	 * @var \System\Void***
	 * @property
	 */
	public readonly $PPV;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $OwnsHandle;
	/**
	 * @return \System\Void|void
	 */
	public  function Paint(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Closed(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Activated(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Deactivated(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnSize* $size
	 * @param \Avalonia\Native\Interop\AvnPlatformResizeReason $reason
	 * @return \System\Void|void
	 */
	public  function Resized($size, $reason){}
	/**
	 * @param \Avalonia\Native\Interop\AvnPoint $position
	 * @return \System\Void|void
	 */
	public  function PositionChanged($position){}
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
	 * @param \Avalonia\Native\Interop\AvnRawKeyEventType $type
	 * @param \System\UInt64 $timeStamp
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \System\UInt32 $key
	 * @return \System\Int32|int
	 */
	public  function RawKeyEvent($type, $timeStamp, $modifiers, $key){}
	/**
	 * @param \System\UInt64 $timeStamp
	 * @param \System\String|string $text
	 * @return \System\Int32|int
	 */
	public  function RawTextInputEvent($timeStamp, $text){}
	/**
	 * @param \System\Double|double $scaling
	 * @return \System\Void|void
	 */
	public  function ScalingChanged($scaling){}
	/**
	 * @return \System\Void|void
	 */
	public  function RunRenderPriorityJobs(){}
	/**
	 * @return \System\Void|void
	 */
	public  function LostFocus(){}
	/**
	 * @param \Avalonia\Native\Interop\AvnDragEventType $type
	 * @param \Avalonia\Native\Interop\AvnPoint $position
	 * @param \Avalonia\Native\Interop\AvnInputModifiers $modifiers
	 * @param \Avalonia\Native\Interop\AvnDragDropEffects $effects
	 * @param \Avalonia\Native\Interop\IAvnClipboard $clipboard
	 * @param \System\IntPtr $dataObjectHandle
	 * @return \Avalonia\Native\Interop\AvnDragDropEffects
	 */
	public  function DragEvent($type, $position, $modifiers, $effects, $clipboard, $dataObjectHandle){}
	/**
	 * @return \Avalonia\Native\Interop\IAvnAutomationPeer
	 */
	public  function get_AutomationPeer(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnWindowBaseEventsProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnWindowBaseEventsProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnWindowBaseEventsProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnWindowBaseEventsProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
