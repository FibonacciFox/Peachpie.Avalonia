<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConcurrentSetItem_2MethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_1($other){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_2($key){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ConcurrentSetItem_2 extends \System\Object
{
	/**
	 * @uses ConcurrentSetItem_2MethodsOverride::Compare_1 ($other)
	 * @uses ConcurrentSetItem_2MethodsOverride::Compare_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Compare(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
