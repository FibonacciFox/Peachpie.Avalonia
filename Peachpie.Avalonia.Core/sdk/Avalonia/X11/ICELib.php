<?php
namespace Avalonia\X11;
/**
 */
class ICELib extends \System\Object
{
	/**
	 * @param \System\IntPtr $watchProc
	 * @param \System\IntPtr $clientData
	 * @return \System\Int32|int
	 */
	public static function IceAddConnectionWatch($watchProc, $clientData){}
	/**
	 * @param \System\IntPtr $watchProc
	 * @param \System\IntPtr $clientData
	 * @return \System\Void|void
	 */
	public static function IceRemoveConnectionWatch($watchProc, $clientData){}
	/**
	 * @param \System\IntPtr $iceConn
	 * @param \System\IntPtr& $replyWait
	 * @param \System\Boolean& $replyReadyRet
	 * @return \Avalonia\X11\IceProcessMessagesStatus
	 */
	public static function IceProcessMessages($iceConn, $replyWait, $replyReadyRet){}
	/**
	 * @param \System\IntPtr $handler
	 * @return \System\IntPtr
	 */
	public static function IceSetErrorHandler($handler){}
	/**
	 * @param \System\IntPtr $handler
	 * @return \System\IntPtr
	 */
	public static function IceSetIOErrorHandler($handler){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
