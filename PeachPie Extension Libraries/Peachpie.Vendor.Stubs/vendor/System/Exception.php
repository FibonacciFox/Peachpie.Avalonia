<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ExceptionOverride {
	/**
	 * @deprecated
	 * @param \System\Exception+ExceptionMessageKind $kind
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function GetMessageFromNativeResources_1 ($kind){}
	/**
	 * @deprecated
	 * @param \System\Exception+ExceptionMessageKind $kind
	 * @param \System\Runtime\CompilerServices\StringHandleOnStack $retMesg
	 * @return \System\Void|void
	 */
	#[MethodOverride]private static function GetMessageFromNativeResources_2 ($kind, $retMesg){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_3 ($message, $innerException){}
}
class Exception extends \System\Object implements
	\System\Runtime\Serialization\ISerializable
{
	use ExceptionOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @field
	 * @var \System\String|string
	 */
	const InnerExceptionPrefix = ' ---> ';
	/**
	 * @property
	 * @var \System\Reflection\MethodBase
	 * @since readonly
	 */
	public $TargetSite;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\Collections\IDictionary
	 * @since readonly
	 */
	public $Data;
	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $InnerException;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $HelpLink;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Source;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $HResult;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $StackTrace;
	private function CreateDataContainer(){}
	private static function IsImmutableAgileException($e){}
	private static function GetMethodFromStackTrace($stackTrace){}
	private function GetExceptionMethodFromStackTrace(){}
	private function OnDeserialized($context){}
	/**
	 * @return \System\Void|void
	 */
	protected function InternalPreserveStackTrace(){}
	private static function PrepareForForeignExceptionRaise(){}
	private static function GetStackTracesDeepCopy($exception, &$currentStackTrace, &$dynamicMethodArray){}
	/**
	 * @param \System\Exception $exception
	 * @param \System\Byte $currentStackTrace
	 * @param \System\Object $dynamicMethodArray
	 * @return \System\Void|void
	 */
	protected static function SaveStackTracesFromDeepCopy($exception, $currentStackTrace, $dynamicMethodArray){}
	/**
	 * @return \System\UInt32
	 */
	protected static function GetExceptionCount(){}
	/**
	 * @param \System\Exception+DispatchState& &$dispatchState
	 * @return \System\Void|void
	 */
	protected function RestoreDispatchState(&$dispatchState){}
	/**
	 * @uses ExceptionOverride::GetMessageFromNativeResources_1 <br>protected , args: ($kind)<br>
	 * @uses ExceptionOverride::GetMessageFromNativeResources_2 <br>private , args: ($kind, $retMesg)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|\System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function GetMessageFromNativeResources (\override ...$args){}
	/**
	 * @return \System\Exception+DispatchState
	 */
	protected function CaptureDispatchState(){}
	private function CanSetRemoteStackTrace(){}
	/**
	 * @param \System\UInt32& &$helpContext
	 * @return \System\String|string
	 */
	protected function GetHelpContext(&$helpContext){}
	private function GetClassName(){}
	/**
	 * @return \System\Exception
	 */
	public function GetBaseException(){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Runtime\Serialization\SafeSerializationEventArgs]
	 * @return \System\Void|void
	 */
	protected function add_SerializeObjectState($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Runtime\Serialization\SafeSerializationEventArgs]
	 * @return \System\Void|void
	 */
	protected function remove_SerializeObjectState($value){}
	private function RestoreRemoteStackTrace($info, $context){}
	private function GetStackTrace(){}
	/**
	 * @return \System\Void|void
	 */
	protected function SetCurrentStackTrace(){}
	/**
	 * @param \System\String|string $stackTrace
	 * @return \System\Void|void
	 */
	protected function SetRemoteStackTrace($stackTrace){}
	/**
	 * @uses ExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses ExceptionOverride::__construct_3 <br>public , args: ($message, $innerException)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}