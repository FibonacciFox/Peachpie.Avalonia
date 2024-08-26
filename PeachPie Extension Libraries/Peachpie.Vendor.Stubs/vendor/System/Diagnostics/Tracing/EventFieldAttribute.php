<?php
namespace System\Diagnostics\Tracing;
class EventFieldAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventFieldTags
	 */
	public $Tags;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventFieldFormat
	 */
	public $Format;
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