<?php
namespace System\Diagnostics\Tracing;
class EventDataAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
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