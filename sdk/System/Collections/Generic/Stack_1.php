<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Stack_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $arrayIndex){}
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
class Stack_1 extends \System\Object implements 
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
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @uses Stack_1MethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses Stack_1MethodsOverride::CopyTo_2 ($array, $arrayIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses Stack_1MethodsOverride::GetEnumerator_1 ()
	 * @uses Stack_1MethodsOverride::GetEnumerator_2 ()
	 * @uses Stack_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function TrimExcess(){}
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
	 * @return \System\Collections\Generic\T
	 */
	public  function Pop(){}
	/**
	 * @param \System\Collections\Generic\T& $result
	 * @return \System\Boolean
	 */
	public  function TryPop($result){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @return \System\Void|void
	 */
	public  function Push($item){}
	/**
	 * @param \System\Collections\Generic\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PushWithResize($item){}
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
	 * @return \System\Collections\Generic\T[]
	 */
	public  function ToArray(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowForEmptyStack(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
