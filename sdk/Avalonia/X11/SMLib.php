<?php
namespace Avalonia\X11;
/**
 */
class SMLib extends \System\Object
{
	/**
	 * @param \System\String|string $networkId
	 * @param \System\IntPtr $content
	 * @param \System\Int32|int $xsmpMajorRev
	 * @param \System\Int32|int $xsmpMinorRev
	 * @param \System\UIntPtr $mask
	 * @param \Avalonia\X11\SmcCallbacks& $callbacks
	 * @param \System\String|string $previousId
	 * @param \System\IntPtr& $clientIdRet
	 * @param \System\Int32|int $errorLength
	 * @param \System\Byte[] $errorStringRet
	 * @return \System\IntPtr
	 */
	public static function SmcOpenConnection($networkId, $content, $xsmpMajorRev, $xsmpMinorRev, $mask, $callbacks, $previousId, $clientIdRet, $errorLength, $errorStringRet){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\Int32|int $count
	 * @param \System\String[] $reasonMsgs
	 * @return \System\Int32|int
	 */
	public static function SmcCloseConnection($smcConn, $count, $reasonMsgs){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\Boolean $success
	 * @return \System\Void|void
	 */
	public static function SmcSaveYourselfDone($smcConn, $success){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \Avalonia\X11\SmDialogValue $dialogType
	 * @param \System\IntPtr $interactProc
	 * @param \System\IntPtr $clientData
	 * @return \System\Int32|int
	 */
	public static function SmcInteractRequest($smcConn, $dialogType, $interactProc, $clientData){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\Boolean $success
	 * @return \System\Void|void
	 */
	public static function SmcInteractDone($smcConn, $success){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @return \System\IntPtr
	 */
	public static function SmcGetIceConnection($smcConn){}
	/**
	 * @param \System\IntPtr $handler
	 * @return \System\IntPtr
	 */
	public static function SmcSetErrorHandler($handler){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
