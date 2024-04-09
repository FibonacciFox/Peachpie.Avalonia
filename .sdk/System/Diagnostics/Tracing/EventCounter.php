<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EventCounterOverride {
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteMetric_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function WriteMetric_2 ($value){}
}
class EventCounter extends \System\Diagnostics\Tracing\DiagnosticCounter implements
	\System\IDisposable
{
	use EventCounterOverride;
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
	 * @uses EventCounterOverride::WriteMetric_1 <br>public , args: ($value)<br>
	 * @uses EventCounterOverride::WriteMetric_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteMetric (\override ...$args){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	protected function OnMetricWritten($value){}
	/**
	 * @return \System\Void|void
	 */
	protected function ResetStatistics(){}
	private function Enqueue($value){}
	/**
	 * @return \System\Void|void
	 */
	protected function Flush(){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 */
	public function __construct($name, $eventSource){}
}