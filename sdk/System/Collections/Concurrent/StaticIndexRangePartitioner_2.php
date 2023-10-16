<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class StaticIndexRangePartitioner_2 extends \System\Collections\Concurrent\OrderablePartitioner_1
{
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $SupportsDynamicPartitions;
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_SourceCount(){}
	/**
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $endIndex
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	protected  function CreatePartition($startIndex, $endIndex){}
}
