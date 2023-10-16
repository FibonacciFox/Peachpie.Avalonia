<?php
namespace System\Threading;
/**
 */
class WorkStealingQueueList extends \System\Object
{
	/**
	 * @var \System\Threading\ThreadPoolWorkQueue+WorkStealingQueue[]
	 * @property
	 */
	public readonly $Queues;
	/**
	 * @return \System\Threading\WorkStealingQueue[]
	 */
	public static function get_Queues(){}
	/**
	 * @param \System\Threading\WorkStealingQueue $queue
	 * @return \System\Void|void
	 */
	public static function Add($queue){}
	/**
	 * @param \System\Threading\WorkStealingQueue $queue
	 * @return \System\Void|void
	 */
	public static function Remove($queue){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
