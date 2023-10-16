<?php
namespace System\Buffers;
/**
 */
class Utilities extends \System\Object
{
	/**
	 * @param \System\Int32|int $bufferSize
	 * @return \System\Int32|int
	 */
	protected static function SelectBucketIndex($bufferSize){}
	/**
	 * @param \System\Int32|int $binIndex
	 * @return \System\Int32|int
	 */
	protected static function GetMaxSizeForBucket($binIndex){}
	/**
	 * @return \System\Buffers\MemoryPressure
	 */
	protected static function GetMemoryPressure(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
