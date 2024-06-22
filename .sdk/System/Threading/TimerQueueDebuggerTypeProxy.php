<?php
namespace System\Threading;
final class TimerQueueDebuggerTypeProxy extends \System\Object
{

	/**
	 * @property
	 * @var \System\Threading\TimerQueueTimer[]
	 * @since readonly
	 */
	public $Items;
	/**
	 * @param \System\Threading\TimerQueue $queue
	 */
	public function __construct($queue){}
}