<?php
namespace System\Diagnostics\Tracing;
class TraceLoggingTypeInfo extends \System\Object
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
	 * @param \System\Diagnostics\Tracing\TraceLoggingMetadataCollector $collector
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\EventFieldFormat $format
	 * @return \System\Void|void
	 */
	abstract public function WriteMetadata($collector, $name, $format);
	/**
	 * @param \System\Diagnostics\Tracing\PropertyValue $value
	 * @return \System\Void|void
	 */
	abstract public function WriteData($value);
	/**
	 * @param \System\Object|object $value
	 * @return \System\Object|object
	 */
	public function GetData($value){}
	/**
	 * @param \System\Type $type
	 * @param \System\Collections\Generic\List_1 $recursionCheck [generic: System\Type]
	 * @return \System\Diagnostics\Tracing\TraceLoggingTypeInfo
	 */
	public static function GetInstance($type, $recursionCheck){}
}