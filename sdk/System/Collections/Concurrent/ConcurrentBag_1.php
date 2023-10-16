<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConcurrentBag_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
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
class ConcurrentBag_1 extends \System\Object implements 
	\System\Collections\Concurrent\IProducerConsumerCollection_1,
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEmpty;
	/**
	 * @param \System\Collections\Concurrent\T $item
	 * @return \System\Void|void
	 */
	public  function Add($item){}
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
	public  function TryTake($result){}
	/**
	 * @param \System\Collections\Concurrent\T& $result
	 * @return \System\Boolean
	 */
	public  function TryPeek($result){}
	/**
	 * @param \System\Boolean $forceCreate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCurrentThreadWorkStealingQueue($forceCreate){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateWorkStealingQueueForCurrentThread(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetUnownedWorkStealingQueue(){}
	/**
	 * @param \System\Collections\Concurrent\T& $result
	 * @param \System\Boolean $take
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TrySteal($result, $take){}
	/**
	 * @param \System\Collections\Concurrent\WorkStealingQueue $startInclusive
	 * @param \System\Collections\Concurrent\WorkStealingQueue $endExclusive
	 * @param \System\Collections\Concurrent\T& $result
	 * @param \System\Boolean $take
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryStealFromTo($startInclusive, $endExclusive, $result, $take){}
	/**
	 * @uses ConcurrentBag_1MethodsOverride::CopyTo_1 ($array, $index)
	 * @uses ConcurrentBag_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\T[] $array
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyFromEachQueueToArray($array, $index){}
	/**
	 * @return \System\Collections\Concurrent\T[]
	 */
	public  function ToArray(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @uses ConcurrentBag_1MethodsOverride::GetEnumerator_1 ()
	 * @uses ConcurrentBag_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DangerousCount(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEmpty(){}
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_GlobalQueuesLock(){}
	/**
	 * @param \System\Boolean& $lockTaken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FreezeBag($lockTaken){}
	/**
	 * @param \System\Boolean $lockTaken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UnfreezeBag($lockTaken){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
