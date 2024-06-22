<?php
namespace System\Diagnostics\Tracing;
class EventSourceCreatedEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventSource
	 */
	public $EventSource;
	/**
	 */
	public function __construct(){}
}