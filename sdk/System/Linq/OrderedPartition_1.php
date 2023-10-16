<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OrderedPartition_1MethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class OrderedPartition_1 extends \System\Object implements 
	\System\Linq\IPartition_1,
	\System\Linq\IIListProvider_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @uses OrderedPartition_1MethodsOverride::GetEnumerator_1 ()
	 * @uses OrderedPartition_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1
	 */
	public  function Skip($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1
	 */
	public  function Take($count){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean& $found
	 * @return \System\Linq\TElement
	 */
	public  function TryGetElementAt($index, $found){}
	/**
	 * @param \System\Boolean& $found
	 * @return \System\Linq\TElement
	 */
	public  function TryGetFirst($found){}
	/**
	 * @param \System\Boolean& $found
	 * @return \System\Linq\TElement
	 */
	public  function TryGetLast($found){}
	/**
	 * @return \System\Linq\TElement[]
	 */
	public  function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function ToList(){}
	/**
	 * @param \System\Boolean $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public  function GetCount($onlyIfCheap){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
