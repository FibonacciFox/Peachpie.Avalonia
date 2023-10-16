<?php
namespace System\Diagnostics\Tracing;
/**
 */
class DiagnosticCounter extends \System\Object implements 
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
	 * @return \System\Void|void
	 */
	protected  function Publish(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\String|string $key
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function AddMetadata($key, $value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DisplayName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayName($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DisplayUnits(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DisplayUnits($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Diagnostics\Tracing\EventSource
	 */
	public  function get_EventSource(){}
	/**
	 * @param \System\Single $intervalSec
	 * @param \System\Int32|int $pollingIntervalMillisec
	 * @return \System\Void|void
	 */
	protected  function WritePayload($intervalSec, $pollingIntervalMillisec){}
	/**
	 * @param \System\String|string $message
	 * @return \System\Void|void
	 */
	protected  function ReportOutOfBandMessage($message){}
	/**
	 * @return \System\String|string
	 */
	protected  function GetMetadataString(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
