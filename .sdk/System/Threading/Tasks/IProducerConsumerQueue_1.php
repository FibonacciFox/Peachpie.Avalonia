<?php
namespace System\Threading\Tasks;
interface IProducerConsumerQueue_1
{


	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Enqueue($item);
	/**
	 * @param \T& &$result
	 * @return \System\Boolean|bool
	 */
	public function TryDequeue(&$result);
}