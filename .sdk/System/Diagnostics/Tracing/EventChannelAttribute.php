<?php
namespace System\Diagnostics\Tracing;
final class EventChannelAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Enabled;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventChannelType
	 */
	public $EventChannelType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 */
	public function __construct(){}
}