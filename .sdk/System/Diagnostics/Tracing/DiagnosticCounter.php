<?php
namespace System\Diagnostics\Tracing;
class DiagnosticCounter extends \System\Object implements
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
	 * @return \System\Void|void
	 */
	protected function Publish(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\String|string $key
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public function AddMetadata($key, $value){}
	/**
	 * @param \System\Single $intervalSec
	 * @param \System\Int32|int $pollingIntervalMillisec
	 * @return \System\Void|void
	 */
	abstract protected function WritePayload($intervalSec, $pollingIntervalMillisec);
	/**
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	protected function ReportOutOfBandMessage($message){}
	/**
	 * @return \System\String|string
	 */
	protected function GetMetadataString(){}
}