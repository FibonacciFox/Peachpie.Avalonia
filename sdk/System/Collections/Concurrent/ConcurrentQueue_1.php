<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ConcurrentQueue_1MethodsOverride
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
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetCount_1($s, $head, $tail){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] private static function GetCount_2($head, $headHead, $tail, $tailTail){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryPeek_1($result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function TryPeek_2($result, $resultUsed){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ConcurrentQueue_1 extends \System\Object implements 
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
	 * @uses ConcurrentQueue_1MethodsOverride::CopyTo_1 ($array, $index)
	 * @uses ConcurrentQueue_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
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
	 * @uses ConcurrentQueue_1MethodsOverride::GetEnumerator_1 ()
	 * @uses ConcurrentQueue_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryAdd($item){}
	/**
	 * @param \System\Collections\Concurrent\T& $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryTake($item){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEmpty(){}
	/**
	 * @return \System\Collections\Concurrent\T[]
	 */
	public  function ToArray(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @uses ConcurrentQueue_1MethodsOverride::GetCount_1 ($s, $head, $tail)
	 * @uses ConcurrentQueue_1MethodsOverride::GetCount_2 ($head, $headHead, $tail, $tailTail)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCount(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\ConcurrentQueueSegment_1& $head
	 * @param \System\Int32& $headHead
	 * @param \System\Collections\Concurrent\ConcurrentQueueSegment_1& $tail
	 * @param \System\Int32& $tailTail
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SnapForObservation($head, $headHead, $tail, $tailTail){}
	/**
	 * @param \System\Collections\Concurrent\ConcurrentQueueSegment_1 $segment
	 * @param \System\Int32|int $i
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetItemWhenAvailable($segment, $i){}
	/**
	 * @param \System\Collections\Concurrent\ConcurrentQueueSegment_1 $head
	 * @param \System\Int32|int $headHead
	 * @param \System\Collections\Concurrent\ConcurrentQueueSegment_1 $tail
	 * @param \System\Int32|int $tailTail
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Enumerate($head, $headHead, $tail, $tailTail){}
	/**
	 * @param \System\Collections\Concurrent\T $item
	 * @return \System\Void|void
	 */
	public  function Enqueue($item){}
	/**
	 * @param \System\Collections\Concurrent\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnqueueSlow($item){}
	/**
	 * @param \System\Collections\Concurrent\T& $result
	 * @return \System\Boolean
	 */
	public  function TryDequeue($result){}
	/**
	 * @param \System\Collections\Concurrent\T& $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryDequeueSlow($item){}
	/**
	 * @uses ConcurrentQueue_1MethodsOverride::TryPeek_1 ($result)
	 * @uses ConcurrentQueue_1MethodsOverride::TryPeek_2 ($result, $resultUsed)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryPeek(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
