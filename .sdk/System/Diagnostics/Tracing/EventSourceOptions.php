<?php
namespace System\Diagnostics\Tracing;
final class EventSourceOptions extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	protected $keywords;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventTags
	 */
	protected $tags;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventActivityOptions
	 */
	protected $activityOptions;
	/**
	 * @field
	 * @var \System\Byte
	 */
	protected $level;
	/**
	 * @field
	 * @var \System\Byte
	 */
	protected $opcode;
	/**
	 * @field
	 * @var \System\Byte
	 */
	protected $valuesSet;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventLevel
	 */
	public $Level;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	public $Opcode;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	public $Keywords;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventTags
	 */
	public $Tags;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventActivityOptions
	 */
	public $ActivityOptions;

}