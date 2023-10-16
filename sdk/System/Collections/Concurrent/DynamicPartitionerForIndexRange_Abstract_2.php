<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class DynamicPartitionerForIndexRange_Abstract_2 extends \System\Collections\Concurrent\OrderablePartitioner_1
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $SupportsDynamicPartitions;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $KeysOrderedInEachPartition;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $KeysOrderedAcrossPartitions;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $KeysNormalized;
	/**
	 * @param \System\Collections\Concurrent\TCollection $data
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	protected  function GetOrderableDynamicPartitions_Factory($data){}
}
