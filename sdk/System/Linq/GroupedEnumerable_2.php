<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GroupedEnumerable_2MethodsOverride
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
class GroupedEnumerable_2 extends \System\Object implements 
	\System\Linq\IIListProvider_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @return \System\Linq\IGrouping_2[]
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
	 * @uses GroupedEnumerable_2MethodsOverride::GetEnumerator_1 ()
	 * @uses GroupedEnumerable_2MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
