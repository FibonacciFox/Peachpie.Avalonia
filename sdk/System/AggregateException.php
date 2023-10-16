<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AggregateExceptionMethodsOverride
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
class AggregateException extends \System\Exception implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_message;
	/**
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\Exception]
	 * @property
	 */
	public readonly $InnerExceptions;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Message;
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
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1
	 */
	public  function get_InnerExceptions(){}
	/**
	 * @param \System\Func_2 $predicate
	 * @return \System\Void|void
	 */
	public  function Handle($predicate){}
	/**
	 * @return \System\AggregateException
	 */
	public  function Flatten(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_InnerExceptionCount(){}
	/**
	 * @return \System\Exception[]
	 */
	protected  function get_InternalInnerExceptions(){}
	/**
	 * @uses AggregateExceptionMethodsOverride::GetType_1 ()
	 * @uses AggregateExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}
