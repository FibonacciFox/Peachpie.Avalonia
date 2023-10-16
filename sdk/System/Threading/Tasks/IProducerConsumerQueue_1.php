<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IProducerConsumerQueue_1
{
	/**
	 * @param \System\Threading\Tasks\T $item
	 */
	public function Enqueue($item);
	/**
	 * @param \System\Threading\Tasks\T& $result
	 */
	public function TryDequeue($result);
	/**
	 */
	public function get_IsEmpty();
	/**
	 */
	public function get_Count();
}
