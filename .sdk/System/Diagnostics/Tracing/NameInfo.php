<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NameInfoOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $otherName
	 * @param \System\Diagnostics\Tracing\EventTags $otherTags
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function Compare_1 ($otherName, $otherTags){}
}
final class NameInfo extends \System\Diagnostics\Tracing\ConcurrentSetItem_2
{
	use NameInfoOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	protected $name;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Diagnostics\Tracing\EventTags
	 */
	protected $tags;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $identity;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Byte[]
	 */
	protected $nameMetadata;
	/**
	 * @param \System\Int32|int $eventId
	 * @return \System\Void|void
	 */
	protected static function ReserveEventIDsBelow($eventId){}
	/**
	 * @param \System\Diagnostics\Tracing\EventProvider $provider
	 * @param \System\Diagnostics\Tracing\TraceLoggingEventHandleTable $eventHandleTable
	 * @param \System\Diagnostics\Tracing\EventDescriptor $descriptor
	 * @param \System\Diagnostics\Tracing\TraceLoggingEventTypes $eventTypes
	 * @return \System\IntPtr
	 */
	public function GetOrCreateEventHandle($provider, $eventHandleTable, $descriptor, $eventTypes){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\EventTags $tags
	 * @param \System\Int32|int $typeMetadataSize
	 */
	public function __construct($name, $tags, $typeMetadataSize){}
}