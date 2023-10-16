<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EnumerableSorter_2MethodsOverride
{
	/**
	 * @return \System\Int32[]
	 */
	#[MethodOverride] protected  function Sort_1($elements, $count){}
	/**
	 * @return \System\Int32[]
	 */
	#[MethodOverride] protected  function Sort_2($elements, $count, $minIdx, $maxIdx){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class EnumerableSorter_2 extends \System\Linq\EnumerableSorter_1
{
	/**
	 * @param \System\Int32|int $index1
	 * @param \System\Int32|int $index2
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompareKeys($index1, $index2){}
	/**
	 * @uses EnumerableSorter_2MethodsOverride::Sort_1 ($elements, $count)
	 * @uses EnumerableSorter_2MethodsOverride::Sort_2 ($elements, $count, $minIdx, $maxIdx)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Sort(mixed ...$args){}
}
