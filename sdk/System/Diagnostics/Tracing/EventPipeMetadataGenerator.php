<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EventPipeMetadataGeneratorMethodsOverride
{
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GenerateEventMetadata_1($eventMetadata){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GenerateEventMetadata_2($eventId, $eventName, $keywords, $level, $version, $opcode, $eventTypes){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function WriteToBuffer_1($buffer, $bufferLength, $offset, $src, $srcLength){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function WriteToBuffer_2($buffer, $bufferLength, $offset, $value){}
}
/**
 */
class EventPipeMetadataGenerator extends \System\Object
{
	/**
	 * @var \System\Diagnostics\Tracing\EventPipeMetadataGenerator
	 * @field
	 */
	public $Instance;
	/**
	 * @uses EventPipeMetadataGeneratorMethodsOverride::GenerateEventMetadata_1 ($eventMetadata)
	 * @uses EventPipeMetadataGeneratorMethodsOverride::GenerateEventMetadata_2 ($eventId, $eventName, $keywords, $level, $version, $opcode, $eventTypes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GenerateEventMetadata(mixed ...$args){}
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\String|string $eventName
	 * @param \System\Int64|int $keywords
	 * @param \System\UInt32 $level
	 * @param \System\UInt32 $version
	 * @param \System\Diagnostics\Tracing\EventOpcode $opcode
	 * @param \System\Diagnostics\Tracing\EventParameterInfo[] $parameters
	 * @return \System\Byte[]
	 */
	protected  function GenerateMetadata($eventId, $eventName, $keywords, $level, $version, $opcode, $parameters){}
	/**
	 * @uses EventPipeMetadataGeneratorMethodsOverride::WriteToBuffer_1 ($buffer, $bufferLength, $offset, $src, $srcLength)
	 * @uses EventPipeMetadataGeneratorMethodsOverride::WriteToBuffer_2 ($buffer, $bufferLength, $offset, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteToBuffer(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
