<?php
namespace System\Collections\Concurrent;
interface IProducerConsumerCollection_1
{

	/**
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $index);
	/**
	 * @param \T|object $item
	 * @return \System\Boolean|bool
	 */
	public function TryAdd($item);
	/**
	 * @param \T& &$item
	 * @return \System\Boolean|bool
	 */
	public function TryTake(&$item);
	/**
	 * @return \T[]
	 */
	public function ToArray();
}