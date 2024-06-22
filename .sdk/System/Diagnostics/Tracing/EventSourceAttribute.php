<?php
namespace System\Diagnostics\Tracing;
final class EventSourceAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Guid;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $LocalizationResources;
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