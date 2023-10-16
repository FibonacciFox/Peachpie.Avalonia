<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MultiProducerMultiConsumerQueue_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Enqueue_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Enqueue_2($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function TryDequeue_1($result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryDequeue_2($result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsEmpty_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function get_IsEmpty_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function get_Count_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function get_Count_2(){}
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
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class MultiProducerMultiConsumerQueue_1 extends \System\Collections\Concurrent\ConcurrentQueue_1 implements 
	\System\Collections\Concurrent\IProducerConsumerCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Threading\Tasks\IProducerConsumerQueue_1
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
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::Enqueue_1 ($item)
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::Enqueue_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Enqueue(mixed ...$args){}
	/**
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::TryDequeue_1 ($result)
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::TryDequeue_2 ($result)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TryDequeue(mixed ...$args){}
	/**
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::get_IsEmpty_1 ()
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::get_IsEmpty_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsEmpty(mixed ...$args){}
	/**
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::get_Count_1 ()
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::get_Count_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Count(mixed ...$args){}
	/**
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::CopyTo_1 ($array, $index)
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::CopyTo_2 ($array, $index)
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
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::GetEnumerator_1 ()
	 * @uses MultiProducerMultiConsumerQueue_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryAdd($item){}
	/**
	 * @param \System\Threading\Tasks\T& $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryTake($item){}
	/**
	 * @param \System\Threading\Tasks\T& $result
	 * @return \System\Boolean
	 */
	public  function TryPeek($result){}
}
