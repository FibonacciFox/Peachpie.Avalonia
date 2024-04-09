<?php
namespace System\Diagnostics\Tracing;
final class CounterGroup extends \System\Object
{

	/**
	 * @param \System\Diagnostics\Tracing\DiagnosticCounter $eventCounter
	 * @return \System\Void|void
	 */
	protected function Add($eventCounter){}
	/**
	 * @param \System\Diagnostics\Tracing\DiagnosticCounter $eventCounter
	 * @return \System\Void|void
	 */
	protected function Remove($eventCounter){}
	private function RegisterCommandCallback(){}
	private function OnEventSourceCommand($sender, $e){}
	private static function EnsureEventSourceIndexAvailable($eventSourceIndex){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @return \System\Diagnostics\Tracing\CounterGroup
	 */
	protected static function GetCounterGroup($eventSource){}
	private function EnableTimer($pollingIntervalInSeconds){}
	private function DisableTimer(){}
	private function ResetCounters(){}
	private function OnTimer(){}
	private static function PollForValues(){}
}