<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EventPipeMetadataGeneratorOverride {
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\EventSource+EventMetadata $eventMetadata
	 * @return \System\Byte
	 */
	#[MethodOverride]public function GenerateEventMetadata_1 ($eventMetadata){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventKeywords $keywords
	 * @param \System\Diagnostics\Tracing\EventLevel $level
	 * @param \System\UInt32 $version
	 * @param \System\Diagnostics\Tracing\EventOpcode $opcode
	 * @param \System\Diagnostics\Tracing\TraceLoggingEventTypes $eventTypes
	 * @return \System\Byte
	 */
	#[MethodOverride]public function GenerateEventMetadata_2 ($eventId, $eventName, $keywords, $level, $version, $opcode, $eventTypes){}
	/**
	 * @deprecated
	 * @param \System\Byte* $buffer
	 * @param \System\UInt32 $bufferLength
	 * @param \System\UInt32& $offset
	 * @param \System\Byte* $src
	 * @param \System\UInt32 $srcLength
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function WriteToBuffer_1 ($buffer, $bufferLength, $offset, $src, $srcLength){}
	/**
	 * @deprecated
	 * @param \System\Byte* $buffer
	 * @param \System\UInt32 $bufferLength
	 * @param \System\UInt32& $offset
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function WriteToBuffer_2 ($buffer, $bufferLength, $offset, $value){}
}
final class EventPipeMetadataGenerator extends \System\Object
{
	use EventPipeMetadataGeneratorOverride;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventPipeMetadataGenerator
	 */
	public static $Instance;
	/**
	 * @uses EventPipeMetadataGeneratorOverride::GenerateEventMetadata_1 <br>public , args: ($eventMetadata)<br>
	 * @uses EventPipeMetadataGeneratorOverride::GenerateEventMetadata_2 <br>public , args: ($eventId, $eventName, $keywords, $level, $version, $opcode, $eventTypes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|mixed|\override
	 */
	#[MethodOverridePublic]function GenerateEventMetadata (\override ...$args){}
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\String|string $eventName
	 * @param \System\Int64|int $keywords
	 * @param \System\UInt32 $level
	 * @param \System\UInt32 $version
	 * @param \System\Diagnostics\Tracing\EventOpcode $opcode
	 * @param \System\Diagnostics\Tracing\EventParameterInfo $parameters
	 * @return \System\Byte[]
	 */
	protected function GenerateMetadata($eventId, $eventName, $keywords, $level, $version, $opcode, $parameters){}
	/**
	 * @uses EventPipeMetadataGeneratorOverride::WriteToBuffer_1 <br>protected , args: ($buffer, $bufferLength, $offset, $src, $srcLength)<br>
	 * @uses EventPipeMetadataGeneratorOverride::WriteToBuffer_2 <br>protected , args: ($buffer, $bufferLength, $offset, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function WriteToBuffer (\override ...$args){}
}