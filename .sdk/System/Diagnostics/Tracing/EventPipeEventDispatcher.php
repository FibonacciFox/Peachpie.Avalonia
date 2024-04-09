<?php
namespace System\Diagnostics\Tracing;
final class EventPipeEventDispatcher extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\EventPipeEventDispatcher
	 */
	protected static $Instance;
	/**
	 * @param \System\Diagnostics\Tracing\EventListener $eventListener
	 * @param \System\Diagnostics\Tracing\EventCommand $command
	 * @param \System\Boolean|bool $enable
	 * @param \System\Diagnostics\Tracing\EventLevel $level
	 * @param \System\Diagnostics\Tracing\EventKeywords $matchAnyKeywords
	 * @return \System\Void|void
	 */
	protected function SendCommand($eventListener, $command, $enable, $level, $matchAnyKeywords){}
	/**
	 * @param \System\Diagnostics\Tracing\EventListener $listener
	 * @return \System\Void|void
	 */
	protected function RemoveEventListener($listener){}
	private function CommitDispatchConfiguration(){}
	private function StartDispatchTask(){}
	private function StopDispatchTask(){}
	private function DispatchEventsToEventListeners(){}
	private function TimeStampToDateTime($timeStamp){}
}