<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OverrideEventProviderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsEnabled_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsEnabled_2($level, $keywords){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function WriteEvent_1($eventDescriptor, $eventHandle, $activityID, $childActivityID, $eventPayload){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function WriteEvent_2($eventDescriptor, $eventHandle, $activityID, $childActivityID, $dataCount, $data){}
}
/**
 */
class OverrideEventProvider extends \System\Diagnostics\Tracing\EventProvider implements 
	\System\IDisposable
{
	/**
	 * @var \System\Diagnostics\Tracing\IEventProvider
	 * @field
	 */
	protected $m_eventProvider;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $m_disposed;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @property
	 */
	protected $Level;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @property
	 */
	protected $MatchAnyKeyword;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @property
	 */
	protected $MatchAllKeyword;
	/**
	 * @uses OverrideEventProviderMethodsOverride::Dispose_1 ()
	 * @uses OverrideEventProviderMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @uses OverrideEventProviderMethodsOverride::IsEnabled_1 ()
	 * @uses OverrideEventProviderMethodsOverride::IsEnabled_2 ($level, $keywords)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsEnabled(mixed ...$args){}
	/**
	 * @uses OverrideEventProviderMethodsOverride::WriteEvent_1 ($eventDescriptor, $eventHandle, $activityID, $childActivityID, $eventPayload)
	 * @uses OverrideEventProviderMethodsOverride::WriteEvent_2 ($eventDescriptor, $eventHandle, $activityID, $childActivityID, $dataCount, $data)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteEvent(mixed ...$args){}
}
