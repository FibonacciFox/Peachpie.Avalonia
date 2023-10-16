<?php
namespace System\Buffers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArrayPool_1MethodsOverride
{
	/**
	 * @return \System\Buffers\ArrayPool_1
	 */
	#[MethodOverride] public static function Create_1(){}
	/**
	 * @return \System\Buffers\ArrayPool_1
	 */
	#[MethodOverride] public static function Create_2($maxArrayLength, $maxArraysPerBucket){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ArrayPool_1 extends \System\Object
{
	/**
	 * @var \System\Buffers\ArrayPool_1[T]
	 * @property
	 */
	public readonly $Shared;
	/**
	 * @return \System\Buffers\ArrayPool_1
	 */
	public static function get_Shared(){}
	/**
	 * @uses ArrayPool_1MethodsOverride::Create_1 ()
	 * @uses ArrayPool_1MethodsOverride::Create_2 ($maxArrayLength, $maxArraysPerBucket)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
	/**
	 * @param \System\Int32|int $minimumLength
	 * @return \System\Buffers\T[]
	 */
	public  function Rent($minimumLength){}
	/**
	 * @param \System\Buffers\T[] $array
	 * @param \System\Boolean $clearArray
	 * @return \System\Void|void
	 */
	public  function Return($array, $clearArray){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
