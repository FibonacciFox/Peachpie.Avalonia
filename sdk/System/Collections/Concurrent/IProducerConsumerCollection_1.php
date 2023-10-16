<?php
namespace System\Collections\Concurrent;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IProducerConsumerCollection_1
{
	/**
	 * @param \System\Collections\Concurrent\T[] $array
	 * @param \System\Int32|int $index
	 */
	public function CopyTo($array, $index);
	/**
	 * @param \System\Collections\Concurrent\T $item
	 */
	public function TryAdd($item);
	/**
	 * @param \System\Collections\Concurrent\T& $item
	 */
	public function TryTake($item);
	/**
	 */
	public function ToArray();
}
