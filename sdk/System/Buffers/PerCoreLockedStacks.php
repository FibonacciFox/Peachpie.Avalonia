<?php
namespace System\Buffers;
/**
 */
class PerCoreLockedStacks extends \System\Object
{
	/**
	 * @param \System\Buffers\T[] $array
	 * @return \System\Boolean
	 */
	public  function TryPush($array){}
	/**
	 * @return \System\Buffers\T[]
	 */
	public  function TryPop(){}
	/**
	 * @param \System\Int32|int $currentMilliseconds
	 * @param \System\Int32|int $id
	 * @param \System\Buffers\MemoryPressure $pressure
	 * @param \System\Int32|int $bucketSize
	 * @return \System\Void|void
	 */
	public  function Trim($currentMilliseconds, $id, $pressure, $bucketSize){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
