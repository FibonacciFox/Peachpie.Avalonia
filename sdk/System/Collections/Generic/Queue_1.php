<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Queue_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\Generic\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Queue_1 extends \System\Object implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsSynchronized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SyncRoot(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @uses Queue_1MethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses Queue_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Void|void
	 */
	public  function Enqueue($item){}
	/**
	 * @uses Queue_1MethodsOverride::GetEnumerator_1 ()
	 * @uses Queue_1MethodsOverride::GetEnumerator_2 ()
	 * @uses Queue_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\T
	 */
	public  function Dequeue(){}
	/**
	 * @param \System\Collections\Generic\T& $result
	 * @return \System\Boolean
	 */
	public  function TryDequeue($result){}
	/**
	 * @return \System\Collections\Generic\T
	 */
	public  function Peek(){}
	/**
	 * @param \System\Collections\Generic\T& $result
	 * @return \System\Boolean
	 */
	public  function TryPeek($result){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @return \System\Collections\Generic\T[]
	 */
	public  function ToArray(){}
	/**
	 * @param \System\Int32|int $capacity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetCapacity($capacity){}
	/**
	 * @param \System\Int32& $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MoveNext($index){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowForEmptyQueue(){}
	/**
	 * @return \System\Void|void
	 */
	public  function TrimExcess(){}
	/**
	 * @param \System\Int32|int $capacity
	 * @return \System\Int32|int
	 */
	public  function EnsureCapacity($capacity){}
	/**
	 * @param \System\Int32|int $capacity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Grow($capacity){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
