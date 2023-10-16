<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EnumerableSorter_1MethodsOverride
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
class EnumerableSorter_1 extends \System\Object
{
	/**
	 * @var \System\Func_2[TElement,TElement]
	 * @field
	 */
	protected readonly $IdentityFunc;
	/**
	 * @param \System\Linq\TElement[] $elements
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected  function ComputeKeys($elements, $count){}
	/**
	 * @param \System\Int32|int $index1
	 * @param \System\Int32|int $index2
	 * @return \System\Int32|int
	 */
	protected  function CompareAnyKeys($index1, $index2){}
	/**
	 * @param \System\Linq\TElement[] $elements
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ComputeMap($elements, $count){}
	/**
	 * @uses EnumerableSorter_1MethodsOverride::Sort_1 ($elements, $count)
	 * @uses EnumerableSorter_1MethodsOverride::Sort_2 ($elements, $count, $minIdx, $maxIdx)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Sort(mixed ...$args){}
	/**
	 * @param \System\Linq\TElement[] $elements
	 * @param \System\Int32|int $count
	 * @param \System\Int32|int $idx
	 * @return \System\Linq\TElement
	 */
	protected  function ElementAt($elements, $count, $idx){}
	/**
	 * @param \System\Int32[] $map
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @return \System\Void|void
	 */
	protected  function QuickSort($map, $left, $right){}
	/**
	 * @param \System\Int32[] $map
	 * @param \System\Int32|int $left
	 * @param \System\Int32|int $right
	 * @param \System\Int32|int $minIdx
	 * @param \System\Int32|int $maxIdx
	 * @return \System\Void|void
	 */
	protected  function PartialQuickSort($map, $left, $right, $minIdx, $maxIdx){}
	/**
	 * @param \System\Int32[] $map
	 * @param \System\Int32|int $right
	 * @param \System\Int32|int $idx
	 * @return \System\Int32|int
	 */
	protected  function QuickSelect($map, $right, $idx){}
	/**
	 * @param \System\Int32[] $map
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	protected  function Min($map, $count){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
