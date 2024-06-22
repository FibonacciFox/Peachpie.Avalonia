<?php
namespace System\Threading;
class WorkStealingQueueList extends \System\Object
{

	/**
	 * @property
	 * @var \System\Threading\ThreadPoolWorkQueue+WorkStealingQueue[]
	 * @since readonly
	 */
	public $Queues;
	/**
	 * @param \System\Threading\ThreadPoolWorkQueue+WorkStealingQueue $queue
	 * @return \System\Void|void
	 */
	public static function Add($queue){}
	/**
	 * @param \System\Threading\ThreadPoolWorkQueue+WorkStealingQueue $queue
	 * @return \System\Void|void
	 */
	public static function Remove($queue){}
}