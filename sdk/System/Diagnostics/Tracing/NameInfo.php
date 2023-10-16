<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NameInfoMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_1($other){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_2($key){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Compare_3($otherName, $otherTags){}
}
/**
 */
class NameInfo extends \System\Diagnostics\Tracing\ConcurrentSetItem_2
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected readonly $name;
	/**
	 * @var \System\Diagnostics\Tracing\EventTags
	 * @field
	 */
	protected readonly $tags;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $identity;
	/**
	 * @var \System\Byte[]
	 * @field
	 */
	protected readonly $nameMetadata;
	/**
	 * @param \System\Int32|int $eventId
	 * @return \System\Void|void
	 */
	protected static function ReserveEventIDsBelow($eventId){}
	/**
	 * @uses NameInfoMethodsOverride::Compare_1 ($other)
	 * @uses NameInfoMethodsOverride::Compare_2 ($key)
	 * @uses NameInfoMethodsOverride::Compare_3 ($otherName, $otherTags)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Compare(mixed ...$args){}
	/**
	 * @param \System\Diagnostics\Tracing\EventProvider $provider
	 * @param \System\Diagnostics\Tracing\TraceLoggingEventHandleTable $eventHandleTable
	 * @param \System\Diagnostics\Tracing\EventDescriptor $descriptor
	 * @param \System\Diagnostics\Tracing\TraceLoggingEventTypes $eventTypes
	 * @return \System\IntPtr
	 */
	public  function GetOrCreateEventHandle($provider, $eventHandleTable, $descriptor, $eventTypes){}
}
