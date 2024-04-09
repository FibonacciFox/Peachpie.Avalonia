<?php
namespace System\Diagnostics\Tracing;
final class NullableTypeInfo extends \System\Diagnostics\Tracing\TraceLoggingTypeInfo
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @since readonly
	 */
	public $Level;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventOpcode
	 * @since readonly
	 */
	public $Opcode;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @since readonly
	 */
	public $Keywords;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @since readonly
	 */
	public $Tags;
	/**
	 * @param \System\Type $type
	 * @param \System\Collections\Generic\List_1 $recursionCheck [generic: System\Type]
	 */
	public function __construct($type, $recursionCheck){}
}