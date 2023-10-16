<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BlockingCollection_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_2($item, $cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryAdd_1($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryAdd_2($item, $timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryAdd_3($item, $millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryAdd_4($item, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @return \System\Collections\Concurrent\T
	 */
	#[MethodOverride] public  function Take_1(){}
	/**
	 * @return \System\Collections\Concurrent\T
	 */
	#[MethodOverride] public  function Take_2($cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryTake_1($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryTake_2($item, $timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryTake_3($item, $millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryTake_4($item, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function AddToAny_1($collections, $item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function AddToAny_2($collections, $item, $cancellationToken){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TryAddToAny_1($collections, $item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TryAddToAny_2($collections, $item, $timeout){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TryAddToAny_3($collections, $item, $millisecondsTimeout){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TryAddToAny_4($collections, $item, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TakeFromAny_1($collections, $item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TakeFromAny_2($collections, $item, $cancellationToken){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TryTakeFromAny_1($collections, $item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TryTakeFromAny_2($collections, $item, $timeout){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TryTakeFromAny_3($collections, $item, $millisecondsTimeout){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function TryTakeFromAny_4($collections, $item, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function GetConsumingEnumerable_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public  function GetConsumingEnumerable_2($cancellationToken){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class BlockingCollection_1 extends \System\Object implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\IDisposable,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BoundedCapacity;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAddingCompleted;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BoundedCapacity(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAddingCompleted(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
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
	 * @param \System\Collections\Concurrent\IProducerConsumerCollection_1 $collection
	 * @param \System\Int32|int $boundedCapacity
	 * @param \System\Int32|int $collectionCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($collection, $boundedCapacity, $collectionCount){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::Add_1 ($item)
	 * @uses BlockingCollection_1MethodsOverride::Add_2 ($item, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::TryAdd_1 ($item)
	 * @uses BlockingCollection_1MethodsOverride::TryAdd_2 ($item, $timeout)
	 * @uses BlockingCollection_1MethodsOverride::TryAdd_3 ($item, $millisecondsTimeout)
	 * @uses BlockingCollection_1MethodsOverride::TryAdd_4 ($item, $millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryAdd(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\T $item
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryAddWithNoTimeValidation($item, $millisecondsTimeout, $cancellationToken){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::Take_1 ()
	 * @uses BlockingCollection_1MethodsOverride::Take_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Take(mixed ...$args){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::TryTake_1 ($item)
	 * @uses BlockingCollection_1MethodsOverride::TryTake_2 ($item, $timeout)
	 * @uses BlockingCollection_1MethodsOverride::TryTake_3 ($item, $millisecondsTimeout)
	 * @uses BlockingCollection_1MethodsOverride::TryTake_4 ($item, $millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryTake(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\T& $item
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @param \System\Threading\CancellationTokenSource $combinedTokenSource
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryTakeWithNoTimeValidation($item, $millisecondsTimeout, $cancellationToken, $combinedTokenSource){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::AddToAny_1 ($collections, $item)
	 * @uses BlockingCollection_1MethodsOverride::AddToAny_2 ($collections, $item, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AddToAny(mixed ...$args){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::TryAddToAny_1 ($collections, $item)
	 * @uses BlockingCollection_1MethodsOverride::TryAddToAny_2 ($collections, $item, $timeout)
	 * @uses BlockingCollection_1MethodsOverride::TryAddToAny_3 ($collections, $item, $millisecondsTimeout)
	 * @uses BlockingCollection_1MethodsOverride::TryAddToAny_4 ($collections, $item, $millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryAddToAny(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\BlockingCollection_1[] $collections
	 * @param \System\Collections\Concurrent\T $item
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Threading\CancellationToken $externalCancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryAddToAnyCore($collections, $item, $millisecondsTimeout, $externalCancellationToken){}
	/**
	 * @param \System\Collections\Concurrent\BlockingCollection_1[] $collections
	 * @param \System\Collections\Concurrent\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryAddToAnyFast($collections, $item){}
	/**
	 * @param \System\Collections\Concurrent\BlockingCollection_1[] $collections
	 * @param \System\Threading\CancellationToken $externalCancellationToken
	 * @param \System\Boolean $isAddOperation
	 * @param \System\Threading\CancellationToken[]& $cancellationTokens
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetHandles($collections, $externalCancellationToken, $isAddOperation, $cancellationTokens){}
	/**
	 * @param \System\UInt32 $startTime
	 * @param \System\Int32|int $originalWaitMillisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UpdateTimeOut($startTime, $originalWaitMillisecondsTimeout){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::TakeFromAny_1 ($collections, $item)
	 * @uses BlockingCollection_1MethodsOverride::TakeFromAny_2 ($collections, $item, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TakeFromAny(mixed ...$args){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::TryTakeFromAny_1 ($collections, $item)
	 * @uses BlockingCollection_1MethodsOverride::TryTakeFromAny_2 ($collections, $item, $timeout)
	 * @uses BlockingCollection_1MethodsOverride::TryTakeFromAny_3 ($collections, $item, $millisecondsTimeout)
	 * @uses BlockingCollection_1MethodsOverride::TryTakeFromAny_4 ($collections, $item, $millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryTakeFromAny(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\BlockingCollection_1[] $collections
	 * @param \System\Collections\Concurrent\T& $item
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Boolean $isTakeOperation
	 * @param \System\Threading\CancellationToken $externalCancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryTakeFromAnyCore($collections, $item, $millisecondsTimeout, $isTakeOperation, $externalCancellationToken){}
	/**
	 * @param \System\Collections\Concurrent\BlockingCollection_1[] $collections
	 * @param \System\Collections\Concurrent\T& $item
	 * @param \System\Int32|int $millisecondsTimeout
	 * @param \System\Boolean $isTakeOperation
	 * @param \System\Threading\CancellationToken $externalCancellationToken
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryTakeFromAnyCoreSlow($collections, $item, $millisecondsTimeout, $isTakeOperation, $externalCancellationToken){}
	/**
	 * @return \System\Void|void
	 */
	public  function CompleteAdding(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CancelWaitingConsumers(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CancelWaitingProducers(){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::Dispose_1 ()
	 * @uses BlockingCollection_1MethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @return \System\Collections\Concurrent\T[]
	 */
	public  function ToArray(){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::CopyTo_1 ($array, $index)
	 * @uses BlockingCollection_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::GetConsumingEnumerable_1 ()
	 * @uses BlockingCollection_1MethodsOverride::GetConsumingEnumerable_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetConsumingEnumerable(mixed ...$args){}
	/**
	 * @uses BlockingCollection_1MethodsOverride::GetEnumerator_1 ()
	 * @uses BlockingCollection_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Collections\Concurrent\BlockingCollection_1[] $collections
	 * @param \System\Boolean $isAddOperation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateCollectionsArray($collections, $isAddOperation){}
	/**
	 * @param \System\TimeSpan $timeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateTimeout($timeout){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateMillisecondsTimeout($millisecondsTimeout){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CheckDisposed(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
