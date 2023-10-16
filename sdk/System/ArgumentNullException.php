<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArgumentNullExceptionMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ThrowIfNull_1($argument, $paramName){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ThrowIfNull_2($argument, $paramName){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function ThrowIfNull_3($argument, $paramName){}
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
class ArgumentNullException extends \System\ArgumentException implements 
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
	 * @uses ArgumentNullExceptionMethodsOverride::ThrowIfNull_1 ($argument, $paramName)
	 * @uses ArgumentNullExceptionMethodsOverride::ThrowIfNull_2 ($argument, $paramName)
	 * @uses ArgumentNullExceptionMethodsOverride::ThrowIfNull_3 ($argument, $paramName)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThrowIfNull(mixed ...$args){}
	/**
	 * @param \System\String|string $paramName
	 * @return \System\Void|void
	 */
	protected static function Throw($paramName){}
	/**
	 * @uses ArgumentNullExceptionMethodsOverride::GetType_1 ()
	 * @uses ArgumentNullExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}
