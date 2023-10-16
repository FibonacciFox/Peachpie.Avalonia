<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConcurrentStack_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function PushRange_1($items){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function PushRange_2($items, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function TryPopRange_1($items){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function TryPopRange_2($items, $startIndex, $count){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function TryPopCore_1($result){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function TryPopCore_2($count, $poppedHead){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride] private  function ToList_1(){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride] private static function ToList_2($curr){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private static function GetEnumerator_2($head){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ConcurrentStack_1 extends \System\Object implements 
	\System\Collections\Concurrent\IProducerConsumerCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEmpty;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeFromCollection($collection){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEmpty(){}
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
	 * @uses ConcurrentStack_1MethodsOverride::CopyTo_1 ($array, $index)
	 * @uses ConcurrentStack_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\T $item
	 * @return \System\Void|void
	 */
	public  function Push($item){}
	/**
	 * @uses ConcurrentStack_1MethodsOverride::PushRange_1 ($items)
	 * @uses ConcurrentStack_1MethodsOverride::PushRange_2 ($items, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PushRange(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\Node $head
	 * @param \System\Collections\Concurrent\Node $tail
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PushCore($head, $tail){}
	/**
	 * @param \System\Collections\Concurrent\T[] $items
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidatePushPopRangeInput($items, $startIndex, $count){}
	/**
	 * @param \System\Collections\Concurrent\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryAdd($item){}
	/**
	 * @param \System\Collections\Concurrent\T& $result
	 * @return \System\Boolean
	 */
	public  function TryPeek($result){}
	/**
	 * @param \System\Collections\Concurrent\T& $result
	 * @return \System\Boolean
	 */
	public  function TryPop($result){}
	/**
	 * @uses ConcurrentStack_1MethodsOverride::TryPopRange_1 ($items)
	 * @uses ConcurrentStack_1MethodsOverride::TryPopRange_2 ($items, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryPopRange(mixed ...$args){}
	/**
	 * @uses ConcurrentStack_1MethodsOverride::TryPopCore_1 ($result)
	 * @uses ConcurrentStack_1MethodsOverride::TryPopCore_2 ($count, $poppedHead)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryPopCore(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\Node $head
	 * @param \System\Collections\Concurrent\T[] $collection
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $nodesCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CopyRemovedItems($head, $collection, $startIndex, $nodesCount){}
	/**
	 * @param \System\Collections\Concurrent\T& $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryTake($item){}
	/**
	 * @return \System\Collections\Concurrent\T[]
	 */
	public  function ToArray(){}
	/**
	 * @uses ConcurrentStack_1MethodsOverride::ToList_1 ()
	 * @uses ConcurrentStack_1MethodsOverride::ToList_2 ($curr)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToList(mixed ...$args){}
	/**
	 * @uses ConcurrentStack_1MethodsOverride::GetEnumerator_1 ()
	 * @uses ConcurrentStack_1MethodsOverride::GetEnumerator_2 ($head)
	 * @uses ConcurrentStack_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
