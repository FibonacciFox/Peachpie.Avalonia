<?php
namespace System\Diagnostics\Tracing;
/**
 */
class PollingCounter extends \System\Diagnostics\Tracing\DiagnosticCounter implements 
	\System\IDisposable
{
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
}
