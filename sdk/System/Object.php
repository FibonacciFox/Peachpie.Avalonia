<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ObjectMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Equals_2($objA, $objB){}
}
/**
 */
class Object
{
	/**
	 * @return \System\Type
	 */
	public  function GetType(){}
	/**
	 * @return \System\Object|object
	 */
	protected  function MemberwiseClone(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Finalize(){}
	/**
	 * @return \System\String|string
	 */
	public  function ToString(){}
	/**
	 * @uses ObjectMethodsOverride::Equals_1 ($obj)
	 * @uses ObjectMethodsOverride::Equals_2 ($objA, $objB)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Equals(mixed ...$args){}
	/**
	 * @param \System\Object|object $objA
	 * @param \System\Object|object $objB
	 * @return \System\Boolean
	 */
	public static function ReferenceEquals($objA, $objB){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetHashCode(){}
}
