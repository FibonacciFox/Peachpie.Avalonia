<?php
namespace System\Threading;
/**
 */
class WaitHandleExtensions extends \System\Object
{
	/**
	 * @param \System\Threading\WaitHandle $waitHandle
	 * @return \Microsoft\Win32\SafeHandles\SafeWaitHandle
	 */
	public static function GetSafeWaitHandle($waitHandle){}
	/**
	 * @param \System\Threading\WaitHandle $waitHandle
	 * @param \Microsoft\Win32\SafeHandles\SafeWaitHandle $value
	 * @return \System\Void|void
	 */
	public static function SetSafeWaitHandle($waitHandle, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
