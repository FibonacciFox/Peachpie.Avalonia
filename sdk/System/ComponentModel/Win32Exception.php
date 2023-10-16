<?php
namespace System\ComponentModel;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Win32ExceptionMethodsOverride
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
class Win32Exception extends \System\Runtime\InteropServices\ExternalException implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_message;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $NativeErrorCode;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ErrorCode;
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
	 * @return \System\Int32|int
	 */
	public  function get_NativeErrorCode(){}
	/**
	 * @uses Win32ExceptionMethodsOverride::GetType_1 ()
	 * @uses Win32ExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}
