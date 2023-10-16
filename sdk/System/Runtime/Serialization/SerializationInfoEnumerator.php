<?php
namespace System\Runtime\Serialization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SerializationInfoEnumeratorMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_1(){}
	/**
	 * @return \System\Runtime\Serialization\SerializationEntry
	 */
	#[MethodOverride] public  function get_Current_2(){}
}
/**
 */
class SerializationInfoEnumerator extends \System\Object implements 
	\System\Collections\IEnumerator
{
	/**
	 * @var \System\Runtime\Serialization\SerializationEntry
	 * @property
	 */
	public readonly $Current;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ObjectType;
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @uses SerializationInfoEnumeratorMethodsOverride::get_Current_1 ()
	 * @uses SerializationInfoEnumeratorMethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @return \System\Type
	 */
	public  function get_ObjectType(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
