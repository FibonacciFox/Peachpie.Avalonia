<?php
namespace System\Diagnostics\Tracing;
/**
 */
class EventSourceCreatedEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Diagnostics\Tracing\EventSource
	 * @property
	 */
	public $EventSource;
	/**
	 * @return \System\Diagnostics\Tracing\EventSource
	 */
	public  function get_EventSource(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSource $value
	 * @return \System\Void|void
	 */
	protected  function set_EventSource($value){}
}
