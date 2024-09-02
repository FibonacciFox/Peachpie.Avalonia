<?php
namespace Avalonia\Threading;
class DispatcherOperationFrame extends \Avalonia\Threading\DispatcherFrame
{
	/**
	 * @property
	 * @var \Avalonia\Threading\Dispatcher
	 * @since readonly
	 */
	public $Dispatcher;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Continue;
	private function Exit(){}
	private function OnCompletedOrAborted($sender, $e){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $op
	 * @param \System\TimeSpan $timeout
	 */
	public function __construct($op, $timeout){}
}