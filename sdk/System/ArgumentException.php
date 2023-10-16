<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArgumentExceptionMethodsOverride
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
class ArgumentException extends \System\SystemException implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_message;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Message;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ParamName;
	/**
	 * @var \System\Reflection\MethodBase
	 * @property
	 */
	public readonly $TargetSite;
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
	#[MethodPrivate]  function SetMessageField(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ParamName(){}
	/**
	 * @param \System\String|string $argument
	 * @param \System\String|string $paramName
	 * @return \System\Void|void
	 */
	public static function ThrowIfNullOrEmpty($argument, $paramName){}
	/**
	 * @param \System\String|string $argument
	 * @param \System\String|string $paramName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowNullOrEmptyException($argument, $paramName){}
	/**
	 * @uses ArgumentExceptionMethodsOverride::GetType_1 ()
	 * @uses ArgumentExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}
