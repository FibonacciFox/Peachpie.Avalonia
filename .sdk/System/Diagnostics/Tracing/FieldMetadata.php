<?php
namespace System\Diagnostics\Tracing;
final class FieldMetadata extends \System\Object
{

	/**
	 * @return \System\Void|void
	 */
	public function IncrementStructFieldCount(){}
	/**
	 * @param \System\Int32& $pos
	 * @param \System\Byte $metadata
	 * @return \System\Void|void
	 */
	public function Encode($pos, $metadata){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\TraceLoggingDataType $type
	 * @param \System\Diagnostics\Tracing\EventFieldTags $tags
	 * @param \System\Boolean|bool $variableCount
	 */
	public function __construct($name, $type, $tags, $variableCount){}
}