<?php
namespace System\Diagnostics\Tracing;
/**
 */
class TypeAnalysis extends \System\Object
{
	/**
	 * @var \System\Diagnostics\Tracing\PropertyAnalysis[]
	 * @field
	 */
	protected readonly $properties;
	/**
	 * @var \System\String
	 * @field
	 */
	protected readonly $name;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @field
	 */
	protected readonly $keywords;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @field
	 */
	protected readonly $level;
	/**
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @field
	 */
	protected readonly $opcode;
	/**
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @field
	 */
	protected readonly $tags;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
