<?php
namespace System\Diagnostics\Tracing;
class IncrementingPollingCounter extends \System\Diagnostics\Tracing\DiagnosticCounter implements
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
	 * @return \System\Void|void
	 */
	protected function UpdateMetric(){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @param \System\Func_1 $totalValueProvider [generic: System\Double]
	 */
	public function __construct($name, $eventSource, $totalValueProvider){}
}