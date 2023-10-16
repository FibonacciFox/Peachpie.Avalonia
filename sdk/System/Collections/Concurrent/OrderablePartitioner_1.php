<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class OrderablePartitioner_1 extends \System\Collections\Concurrent\Partitioner_1
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $KeysOrderedInEachPartition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $KeysOrderedAcrossPartitions;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $KeysNormalized;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $SupportsDynamicPartitions;
	/**
	 * @param \System\Int32|int $partitionCount
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function GetOrderablePartitions($partitionCount){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetOrderableDynamicPartitions(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_KeysOrderedInEachPartition(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_KeysOrderedInEachPartition($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_KeysOrderedAcrossPartitions(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_KeysOrderedAcrossPartitions($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_KeysNormalized(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_KeysNormalized($value){}
}
