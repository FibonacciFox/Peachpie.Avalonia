<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ObjectDisposedExceptionMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ThrowIf_1($condition, $instance){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ThrowIf_2($condition, $type){}
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
class ObjectDisposedException extends \System\InvalidOperationException implements 
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
	public readonly $ObjectName;
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
	 * @uses ObjectDisposedExceptionMethodsOverride::ThrowIf_1 ($condition, $instance)
	 * @uses ObjectDisposedExceptionMethodsOverride::ThrowIf_2 ($condition, $type)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThrowIf(mixed ...$args){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ObjectName(){}
	/**
	 * @uses ObjectDisposedExceptionMethodsOverride::GetType_1 ()
	 * @uses ObjectDisposedExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}
