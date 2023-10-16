<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EventCounterMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function WriteMetric_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function WriteMetric_2($value){}
}
/**
 */
class EventCounter extends \System\Diagnostics\Tracing\DiagnosticCounter implements 
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
	/**
	 * @uses EventCounterMethodsOverride::WriteMetric_1 ($value)
	 * @uses EventCounterMethodsOverride::WriteMetric_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteMetric(mixed ...$args){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	protected  function OnMetricWritten($value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ResetStatistics(){}
	/**
	 * @param \System\Double|double $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Enqueue($value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Flush(){}
}
