<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EnumerableHelpersMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\T[]
	 */
	#[MethodOverride] protected static function ToArray_1($source, $length){}
	/**
	 * @return \System\Collections\Generic\T[]
	 */
	#[MethodOverride] protected static function ToArray_2($source){}
}
/**
 */
class EnumerableHelpers extends \System\Object
{
	/**
	 * @uses EnumerableHelpersMethodsOverride::ToArray_1 ($source, $length)
	 * @uses EnumerableHelpersMethodsOverride::ToArray_2 ($source)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToArray(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Collections\Generic\T[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected static function Copy($source, $array, $arrayIndex, $count){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source
	 * @param \System\Collections\Generic\T[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected static function IterativeCopy($source, $array, $arrayIndex, $count){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
