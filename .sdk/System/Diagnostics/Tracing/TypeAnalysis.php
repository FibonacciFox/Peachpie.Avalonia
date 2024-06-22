<?php
namespace System\Diagnostics\Tracing;
final class TypeAnalysis extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\PropertyAnalysis[]
	 */
	protected $properties;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	protected $name;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	protected $keywords;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\EventLevel
	 */
	protected $level;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 */
	protected $opcode;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\EventTags
	 */
	protected $tags;
	/**
	 * @param \System\Type $dataType
	 * @param \System\Diagnostics\Tracing\EventDataAttribute $eventAttrib
	 * @param \System\Collections\Generic\List_1 $recursionCheck [generic: System\Type]
	 */
	public function __construct($dataType, $eventAttrib, $recursionCheck){}
}