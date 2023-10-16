<?php
namespace System\Runtime\InteropServices;
/**
 */
class PosixSignalRegistration extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @param \System\Runtime\InteropServices\PosixSignal $signal
	 * @param \System\Action_1 $handler
	 * @return \System\Runtime\InteropServices\PosixSignalRegistration
	 */
	public static function Create($signal, $handler){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Runtime\InteropServices\PosixSignal $signal
	 * @param \System\Action_1 $handler
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Register($signal, $handler){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Unregister(){}
	/**
	 * @param \System\Int32|int $dwCtrlType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HandlerRoutine($dwCtrlType){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
