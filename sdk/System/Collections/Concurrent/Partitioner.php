<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PartitionerMethodsOverride
{
	/**
	 * @return \System\Collections\Concurrent\OrderablePartitioner_1
	 */
	#[MethodOverride] public static function Create_1($list, $loadBalance){}
	/**
	 * @return \System\Collections\Concurrent\OrderablePartitioner_1
	 */
	#[MethodOverride] public static function Create_2($array, $loadBalance){}
	/**
	 * @return \System\Collections\Concurrent\OrderablePartitioner_1
	 */
	#[MethodOverride] public static function Create_3($source){}
	/**
	 * @return \System\Collections\Concurrent\OrderablePartitioner_1
	 */
	#[MethodOverride] public static function Create_4($source, $partitionerOptions){}
	/**
	 * @return \System\Collections\Concurrent\OrderablePartitioner_1
	 */
	#[MethodOverride] public static function Create_5($fromInclusive, $toExclusive){}
	/**
	 * @return \System\Collections\Concurrent\OrderablePartitioner_1
	 */
	#[MethodOverride] public static function Create_6($fromInclusive, $toExclusive, $rangeSize){}
	/**
	 * @return \System\Collections\Concurrent\OrderablePartitioner_1
	 */
	#[MethodOverride] public static function Create_7($fromInclusive, $toExclusive){}
	/**
	 * @return \System\Collections\Concurrent\OrderablePartitioner_1
	 */
	#[MethodOverride] public static function Create_8($fromInclusive, $toExclusive, $rangeSize){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function CreateRanges_1($fromInclusive, $toExclusive, $rangeSize){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function CreateRanges_2($fromInclusive, $toExclusive, $rangeSize){}
}
/**
 */
class Partitioner extends \System\Object
{
	/**
	 * @uses PartitionerMethodsOverride::Create_1 ($list, $loadBalance)
	 * @uses PartitionerMethodsOverride::Create_2 ($array, $loadBalance)
	 * @uses PartitionerMethodsOverride::Create_3 ($source)
	 * @uses PartitionerMethodsOverride::Create_4 ($source, $partitionerOptions)
	 * @uses PartitionerMethodsOverride::Create_5 ($fromInclusive, $toExclusive)
	 * @uses PartitionerMethodsOverride::Create_6 ($fromInclusive, $toExclusive, $rangeSize)
	 * @uses PartitionerMethodsOverride::Create_7 ($fromInclusive, $toExclusive)
	 * @uses PartitionerMethodsOverride::Create_8 ($fromInclusive, $toExclusive, $rangeSize)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
	/**
	 * @uses PartitionerMethodsOverride::CreateRanges_1 ($fromInclusive, $toExclusive, $rangeSize)
	 * @uses PartitionerMethodsOverride::CreateRanges_2 ($fromInclusive, $toExclusive, $rangeSize)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateRanges(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDefaultChunkSize(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
