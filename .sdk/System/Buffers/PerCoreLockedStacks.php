<?php
namespace System\Buffers;
final class PerCoreLockedStacks extends \System\Object
{

	/**
	 * @param \T $array
	 * @return \System\Boolean|bool
	 */
	public function TryPush($array){}
	/**
	 * @return \T[]
	 */
	public function TryPop(){}
	/**
	 * @param \System\Int32|int $currentMilliseconds
	 * @param \System\Int32|int $id
	 * @param \System\Buffers\Utilities+MemoryPressure $pressure
	 * @param \System\Int32|int $bucketSize
	 * @return \System\Void|void
	 */
	public function Trim($currentMilliseconds, $id, $pressure, $bucketSize){}
	/**
	 */
	public function __construct(){}
}