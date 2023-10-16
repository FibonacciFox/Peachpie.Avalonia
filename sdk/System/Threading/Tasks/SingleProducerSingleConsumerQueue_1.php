<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SingleProducerSingleConsumerQueue_1MethodsOverride
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
class SingleProducerSingleConsumerQueue_1 extends \System\Object implements 
	\System\Threading\Tasks\IProducerConsumerQueue_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
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
	 * @param \System\Threading\Tasks\T $item
	 * @return \System\Void|void
	 */
	public  function Enqueue($item){}
	/**
	 * @param \System\Threading\Tasks\T $item
	 * @param \System\Threading\Tasks\Segment& $segment
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnqueueSlow($item, $segment){}
	/**
	 * @param \System\Threading\Tasks\T& $result
	 * @return \System\Boolean
	 */
	public  function TryDequeue($result){}
	/**
	 * @param \System\Threading\Tasks\Segment& $segment
	 * @param \System\Threading\Tasks\T[]& $array
	 * @param \System\Threading\Tasks\T& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryDequeueSlow($segment, $array, $result){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEmpty(){}
	/**
	 * @uses SingleProducerSingleConsumerQueue_1MethodsOverride::GetEnumerator_1 ()
	 * @uses SingleProducerSingleConsumerQueue_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
