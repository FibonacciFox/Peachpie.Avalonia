<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExceptionMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function GetMessageFromNativeResources_1($kind){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetMessageFromNativeResources_2($kind, $retMesg){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
}
/**
 */
class Exception extends \System\Object implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_message;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $InnerExceptionPrefix;
	/**
	 * @var \System\Reflection\MethodBase
	 * @property
	 */
	public readonly $TargetSite;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Message;
	/**
	 * @var \System\Collections\IDictionary
	 * @property
	 */
	public readonly $Data;
	/**
	 * @var \System\Exception
	 * @property
	 */
	public readonly $InnerException;
	/**
	 * @var \System\String
	 * @property
	 */
	public $HelpLink;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Source;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $HResult;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $StackTrace;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateDataContainer(){}
	/**
	 * @param \System\Exception $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsImmutableAgileException($e){}
	/**
	 * @param \System\Object|object $stackTrace
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetMethodFromStackTrace($stackTrace){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetExceptionMethodFromStackTrace(){}
	/**
	 * @return \System\Reflection\MethodBase
	 */
	public  function get_TargetSite(){}
	/**
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeserialized($context){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InternalPreserveStackTrace(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PrepareForForeignExceptionRaise(){}
	/**
	 * @param \System\Exception $exception
	 * @param \System\Byte[]& $currentStackTrace
	 * @param \System\Object[]& $dynamicMethodArray
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetStackTracesDeepCopy($exception, $currentStackTrace, $dynamicMethodArray){}
	/**
	 * @param \System\Exception $exception
	 * @param \System\Byte[] $currentStackTrace
	 * @param \System\Object[] $dynamicMethodArray
	 * @return \System\Void|void
	 */
	protected static function SaveStackTracesFromDeepCopy($exception, $currentStackTrace, $dynamicMethodArray){}
	/**
	 * @return \System\UInt32
	 */
	protected static function GetExceptionCount(){}
	/**
	 * @param \System\DispatchState& $dispatchState
	 * @return \System\Void|void
	 */
	protected  function RestoreDispatchState($dispatchState){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasBeenThrown(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SerializationWatsonBuckets(){}
	/**
	 * @uses ExceptionMethodsOverride::GetMessageFromNativeResources_1 ($kind)
	 * @uses ExceptionMethodsOverride::GetMessageFromNativeResources_2 ($kind, $retMesg)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetMessageFromNativeResources(mixed ...$args){}
	/**
	 * @return \System\DispatchState
	 */
	protected  function CaptureDispatchState(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CanSetRemoteStackTrace(){}
	/**
	 * @param \System\UInt32& $helpContext
	 * @return \System\String|string
	 */
	protected  function GetHelpContext($helpContext){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Message(){}
	/**
	 * @return \System\Collections\IDictionary
	 */
	public  function get_Data(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetClassName(){}
	/**
	 * @return \System\Exception
	 */
	public  function GetBaseException(){}
	/**
	 * @return \System\Exception
	 */
	public  function get_InnerException(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_HelpLink(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_HelpLink($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Source(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Source($value){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	protected  function add_SerializeObjectState($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	protected  function remove_SerializeObjectState($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_HResult(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_HResult($value){}
	/**
	 * @uses ExceptionMethodsOverride::GetType_1 ()
	 * @uses ExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RestoreRemoteStackTrace($info, $context){}
	/**
	 * @return \System\String|string
	 */
	public  function get_StackTrace(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetStackTrace(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SetCurrentStackTrace(){}
	/**
	 * @param \System\String|string $stackTrace
	 * @return \System\Void|void
	 */
	protected  function SetRemoteStackTrace($stackTrace){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SerializationStackTraceString(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
