<?php
namespace System\Diagnostics\Tracing;
class PollingCounter extends \System\Diagnostics\Tracing\DiagnosticCounter implements
	\System\IDisposable
{

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
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @param \System\Func_1 $metricProvider [generic: System\Double]
	 */
	public function __construct($name, $eventSource, $metricProvider){}
}