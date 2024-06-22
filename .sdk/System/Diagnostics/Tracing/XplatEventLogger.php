<?php
namespace System\Diagnostics\Tracing;
final class XplatEventLogger extends \System\Diagnostics\Tracing\EventListener implements
	\System\IDisposable
{

	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventListener
	 */
	protected $m_Next;
	/**
	 * @return \System\Diagnostics\Tracing\EventListener
	 */
	public static function InitializePersistentListener(){}
	private static function IsEventSourceLoggingEnabled(){}
	private static function LogEventSource($eventID, $eventName, $eventSourceName, $payload){}
	private static function MinimalJsonserializer($payload, $sb){}
	private static function Serialize($payloadName, $payload, $eventMessage){}
	private static function AppendByteArrayAsHexString($builder, $byteArray){}
	private static function LogOnEventWritten($eventData){}
	/**
	 */
	public function __construct(){}
}