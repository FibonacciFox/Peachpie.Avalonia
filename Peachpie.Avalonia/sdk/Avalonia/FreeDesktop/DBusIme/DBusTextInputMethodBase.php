<?php
namespace Avalonia\FreeDesktop\DBusIme;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DBusTextInputMethodBaseMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Reset_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Reset_2(){}
}
/**
 */
class DBusTextInputMethodBase extends \System\Object implements 
	\Avalonia\FreeDesktop\IX11InputMethodControl,
	\System\IDisposable,
	\Avalonia\Input\TextInput\ITextInputMethodImpl
{
	/**
	 * @return \Tmds\DBus\Protocol\Connection
	 */
	protected  function get_Connection(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_IsConnected(){}
	/**
	 * @return \Avalonia\Input\TextInput\TextInputMethodClient
	 */
	public  function get_Client(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsActive(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WatchAsync(){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Threading\Tasks\Task_1
	 */
	protected  function Connect($name){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetAppName(){}
	/**
	 * @param \System\Exception $e
	 * @param \System\ValueTuple_3 $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnNameChange($e, $args){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	protected  function DisconnectAsync(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnDisconnected(){}
	/**
	 * @uses DBusTextInputMethodBaseMethodsOverride::Reset_1 ()
	 * @uses DBusTextInputMethodBaseMethodsOverride::Reset_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Reset(mixed ...$args){}
	/**
	 * @param \System\Exception $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function QueueOnErrorAsync($e){}
	/**
	 * @param \System\Func_1 $cb
	 * @return \System\Void|void
	 */
	protected  function Enqueue($cb){}
	/**
	 * @param \System\IDisposable $d
	 * @return \System\Void|void
	 */
	protected  function AddDisposable($d){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\PixelRect $rect
	 * @return \System\Threading\Tasks\Task
	 */
	protected  function SetCursorRectCore($rect){}
	/**
	 * @param \System\Boolean $active
	 * @return \System\Threading\Tasks\Task
	 */
	protected  function SetActiveCore($active){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	protected  function ResetContextCore(){}
	/**
	 * @param \Avalonia\Input\Raw\RawKeyEventArgs $args
	 * @param \System\Int32|int $keyVal
	 * @param \System\Int32|int $keyCode
	 * @return \System\Threading\Tasks\Task_1
	 */
	protected  function HandleKeyCore($args, $keyVal, $keyCode){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateActive(){}
	/**
	 * @param \System\Boolean $active
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetWindowActive($active){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputMethodClient $client
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetClient($client){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsEnabled(){}
	/**
	 * @param \Avalonia\Input\Raw\RawKeyEventArgs $args
	 * @param \System\Int32|int $keyVal
	 * @param \System\Int32|int $keyCode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleEventAsync($args, $keyVal, $keyCode){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_Commit($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_Commit($value){}
	/**
	 * @param \System\String|string $s
	 * @return \System\Void|void
	 */
	protected  function FireCommit($s){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function add_ForwardKey($value){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function remove_ForwardKey($value){}
	/**
	 * @param \Avalonia\FreeDesktop\X11InputMethodForwardedKey $k
	 * @return \System\Void|void
	 */
	protected  function FireForward($k){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateCursorRect(){}
	/**
	 * @param \Avalonia\PixelPoint $position
	 * @param \System\Double|double $scaling
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateWindowInfo($position, $scaling){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetCursorRect($rect){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputOptions $options
	 * @return \System\Void|void
	 */
	public  function SetOptions($options){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
