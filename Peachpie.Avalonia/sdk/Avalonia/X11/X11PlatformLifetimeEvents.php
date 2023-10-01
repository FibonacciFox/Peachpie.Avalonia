<?php
namespace Avalonia\X11;
/**
 */
class X11PlatformLifetimeEvents extends \System\Object implements 
	\System\IDisposable,
	\Avalonia\Platform\IPlatformLifetimeEventsImpl
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\IntPtr $clientData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SmcSaveCompleteHandler($smcConn, $clientData){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInstance($smcConn){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\IntPtr $clientData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SmcShutdownCancelledHandler($smcConn, $clientData){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\IntPtr $clientData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SmcDieHandler($smcConn, $clientData){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\IntPtr $clientData
	 * @param \System\Int32|int $saveType
	 * @param \System\Boolean $shutdown
	 * @param \System\Int32|int $interactStyle
	 * @param \System\Boolean $fast
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SmcSaveYourselfHandler($smcConn, $clientData, $saveType, $shutdown, $interactStyle, $fast){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\IntPtr $clientData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StaticInteractHandler($smcConn, $clientData){}
	/**
	 * @param \System\IntPtr $iceConn
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StaticIceIOErrorHandler($iceConn){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\Boolean $swap
	 * @param \System\Int32|int $offendingMinorOpcode
	 * @param \System\UIntPtr $offendingSequence
	 * @param \System\Int32|int $errorClass
	 * @param \System\Int32|int $severity
	 * @param \System\IntPtr $values
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StaticErrorHandler($smcConn, $swap, $offendingMinorOpcode, $offendingSequence, $errorClass, $severity, $values){}
	/**
	 * @param \System\Boolean $swap
	 * @param \System\Int32|int $offendingMinorOpcode
	 * @param \System\UIntPtr $offendingSequence
	 * @param \System\Int32|int $errorClass
	 * @param \System\Int32|int $severity
	 * @param \System\IntPtr $values
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ErrorHandler($swap, $offendingMinorOpcode, $offendingSequence, $errorClass, $severity, $values){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function HandleRequests(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SaveCompleteHandler(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShutdownCancelledHandler(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DieHandler(){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\IntPtr $clientData
	 * @param \System\Boolean $shutdown
	 * @param \System\Boolean $fast
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SaveYourselfHandler($smcConn, $clientData, $shutdown, $fast){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InteractHandler($smcConn){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ActualInteractHandler($smcConn){}
	/**
	 * @param \System\IntPtr $iceConn
	 * @param \System\IntPtr $clientData
	 * @param \System\Boolean $opening
	 * @param \System\IntPtr* $watchData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IceWatchHandler($iceConn, $clientData, $opening, $watchData){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_ShutdownRequested($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_ShutdownRequested($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
