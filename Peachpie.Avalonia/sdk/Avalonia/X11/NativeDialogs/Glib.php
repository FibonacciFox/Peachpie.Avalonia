<?php
namespace Avalonia\X11\NativeDialogs;
/**
 */
class Glib extends \System\Object
{
	/**
	 * @param \Avalonia\X11\NativeDialogs\GSList* $data
	 * @return \System\Void|void
	 */
	public static function g_slist_free($data){}
	/**
	 * @param \System\IntPtr $instance
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function g_object_ref($instance){}
	/**
	 * @param \System\IntPtr $instance
	 * @param \Avalonia\Platform\Interop\Utf8Buffer $signal
	 * @param \System\IntPtr $handler
	 * @param \System\IntPtr $userData
	 * @param \System\Int32|int $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function g_signal_connect_object($instance, $signal, $handler, $userData, $flags){}
	/**
	 * @param \System\IntPtr $instance
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function g_object_unref($instance){}
	/**
	 * @param \System\IntPtr $instance
	 * @param \System\UInt64 $connectionId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function g_signal_handler_disconnect($instance, $connectionId){}
	/**
	 * @param \System\Int32|int $prio
	 * @param \System\UInt32 $interval
	 * @param \Avalonia\X11\NativeDialogs\timeout_callback $callback
	 * @param \System\IntPtr $data
	 * @param \System\IntPtr $destroy
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function g_timeout_add_full($prio, $interval, $callback, $data, $destroy){}
	/**
	 * @param \System\IntPtr $obj
	 * @param \System\String|string $name
	 * @param \Avalonia\X11\NativeDialogs\T $handler
	 * @return \System\IDisposable
	 */
	public static function ConnectSignal($obj, $name, $handler){}
	/**
	 * @param \System\IntPtr $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TimeoutHandler($data){}
	/**
	 * @param \System\Int32|int $priority
	 * @param \System\UInt32 $interval
	 * @param \System\Func_1 $callback
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddTimeout($priority, $interval, $callback){}
	/**
	 * @param \System\Func_1 $action
	 * @return \System\Threading\Tasks\Task_1
	 */
	public static function RunOnGlibThread($action){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
