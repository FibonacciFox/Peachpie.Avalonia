<?php
namespace System\Diagnostics\Tracing;
/**
 */
class IncrementingPollingCounter extends \System\Diagnostics\Tracing\DiagnosticCounter implements 
	\System\IDisposable
{
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public $DisplayRateTimeScale;
	/**
	 * @var \System\String
	 * @property
	 */
	public $DisplayName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $DisplayUnits;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Diagnostics\Tracing\EventSource
	 * @property
	 */
	public readonly $EventSource;
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_DisplayRateTimeScale(){}
	/**
	 * @param \System\TimeSpan $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayRateTimeScale($value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function UpdateMetric(){}
}
