<?php
namespace System\Diagnostics\Tracing;
class IncrementingEventCounter extends \System\Diagnostics\Tracing\DiagnosticCounter implements
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\TimeSpan
	 */
	public $DisplayRateTimeScale;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $DisplayName;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $DisplayUnits;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventSource
	 * @since readonly
	 */
	public $EventSource;
	/**
	 * @param \System\Double|double $increment
	 * @return \System\Void|void
	 */
	public function Increment($increment){}
	/**
	 * @return \System\Void|void
	 */
	protected function UpdateMetric(){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 */
	public function __construct($name, $eventSource){}
}