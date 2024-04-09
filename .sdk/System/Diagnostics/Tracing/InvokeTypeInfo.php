<?php
namespace System\Diagnostics\Tracing;
final class InvokeTypeInfo extends \System\Diagnostics\Tracing\TraceLoggingTypeInfo
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\PropertyAnalysis[]
	 */
	protected $properties;
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
	 * @param \System\Diagnostics\Tracing\TypeAnalysis $typeAnalysis
	 */
	public function __construct($type, $typeAnalysis){}
}