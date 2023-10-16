<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AbandonedMutexExceptionMethodsOverride
{
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
class AbandonedMutexException extends \System\SystemException implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_message;
	/**
	 * @var \System\Threading\Mutex
	 * @property
	 */
	public readonly $Mutex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MutexIndex;
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
	 * @param \System\Int32|int $location
	 * @param \System\Threading\WaitHandle $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetupException($location, $handle){}
	/**
	 * @return \System\Threading\Mutex
	 */
	public  function get_Mutex(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MutexIndex(){}
	/**
	 * @uses AbandonedMutexExceptionMethodsOverride::GetType_1 ()
	 * @uses AbandonedMutexExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}
