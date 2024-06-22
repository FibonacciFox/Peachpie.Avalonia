<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EventSourceOverride {
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsEnabled_1 (){}
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\EventLevel $level
	 * @param \System\Diagnostics\Tracing\EventKeywords $keywords
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsEnabled_2 ($level, $keywords){}
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\EventLevel $level
	 * @param \System\Diagnostics\Tracing\EventKeywords $keywords
	 * @param \System\Diagnostics\Tracing\EventChannel $channel
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsEnabled_3 ($level, $keywords, $channel){}
	/**
	 * @deprecated
	 * @param \System\Type $eventSourceType
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetName_1 ($eventSourceType){}
	/**
	 * @deprecated
	 * @param \System\Type $eventSourceType
	 * @param \System\Diagnostics\Tracing\EventManifestOptions $flags
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function GetName_2 ($eventSourceType, $flags){}
	/**
	 * @deprecated
	 * @param \System\Type $eventSourceType
	 * @param \System\String|string $assemblyPathToIncludeInManifest
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GenerateManifest_1 ($eventSourceType, $assemblyPathToIncludeInManifest){}
	/**
	 * @deprecated
	 * @param \System\Type $eventSourceType
	 * @param \System\String|string $assemblyPathToIncludeInManifest
	 * @param \System\Diagnostics\Tracing\EventManifestOptions $flags
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GenerateManifest_2 ($eventSourceType, $assemblyPathToIncludeInManifest, $flags){}
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\EventSource $eventSource
	 * @param \System\Diagnostics\Tracing\EventCommand $command
	 * @param \System\Collections\Generic\IDictionary_2 $commandArguments [generic: System\String,System\String]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SendCommand_1 ($eventSource, $command, $commandArguments){}
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\EventListener $listener
	 * @param \System\Diagnostics\Tracing\EventProviderType $eventProviderType
	 * @param \System\Int32|int $perEventSourceSessionId
	 * @param \System\Int32|int $etwSessionId
	 * @param \System\Diagnostics\Tracing\EventCommand $command
	 * @param \System\Boolean|bool $enable
	 * @param \System\Diagnostics\Tracing\EventLevel $level
	 * @param \System\Diagnostics\Tracing\EventKeywords $matchAnyKeyword
	 * @param \System\Collections\Generic\IDictionary_2 $commandArguments [generic: System\String,System\String]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SendCommand_2 ($listener, $eventProviderType, $perEventSourceSessionId, $etwSessionId, $command, $enable, $level, $matchAnyKeyword, $commandArguments){}
	/**
	 * @deprecated
	 * @param \System\Guid $activityId
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetCurrentThreadActivityId_1 ($activityId){}
	/**
	 * @deprecated
	 * @param \System\Guid $activityId
	 * @param \System\Guid& &$oldActivityThatWillContinue
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function SetCurrentThreadActivityId_2 ($activityId, &$oldActivityThatWillContinue){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_1 ($eventId){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\Int32|int $arg1
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_2 ($eventId, $arg1){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\Int32|int $arg1
	 * @param \System\Int32|int $arg2
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_3 ($eventId, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\Int32|int $arg1
	 * @param \System\Int32|int $arg2
	 * @param \System\Int32|int $arg3
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_4 ($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\Int64|int $arg1
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_5 ($eventId, $arg1){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\Int64|int $arg1
	 * @param \System\Int64|int $arg2
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_6 ($eventId, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\Int64|int $arg1
	 * @param \System\Int64|int $arg2
	 * @param \System\Int64|int $arg3
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_7 ($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\String|string $arg1
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_8 ($eventId, $arg1){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\String|string $arg1
	 * @param \System\String|string $arg2
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_9 ($eventId, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\String|string $arg1
	 * @param \System\String|string $arg2
	 * @param \System\String|string $arg3
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_10 ($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\String|string $arg1
	 * @param \System\Int32|int $arg2
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_11 ($eventId, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\String|string $arg1
	 * @param \System\Int32|int $arg2
	 * @param \System\Int32|int $arg3
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_12 ($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\String|string $arg1
	 * @param \System\Int64|int $arg2
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_13 ($eventId, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\Int64|int $arg1
	 * @param \System\String|string $arg2
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_14 ($eventId, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\Int32|int $arg1
	 * @param \System\String|string $arg2
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_15 ($eventId, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\Byte $arg1
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_16 ($eventId, $arg1){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\Int64|int $arg1
	 * @param \System\Byte $arg2
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_17 ($eventId, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $eventId
	 * @param \System\Object ...$args
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteEvent_18 ($eventId, ...$args){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Dispose_1 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $disposing
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Dispose_2 ($disposing){}
	/**
	 * @deprecated
	 * @param \System\Diagnostics\Tracing\EventWrittenEventArgs $eventCallbackArgs
	 * @param \System\Int32|int $eventDataCount
	 * @param \System\Diagnostics\Tracing\EventSource+EventData* $data
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function WriteToAllListeners_1 ($eventCallbackArgs, $eventDataCount, $data){}
	/**
	 * @deprecated
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventDescriptor& $eventDescriptor
	 * @param \System\Diagnostics\Tracing\EventTags $tags
	 * @param \System\Guid* $pActivityId
	 * @param \System\Guid* $pChildActivityId
	 * @param \System\Diagnostics\Tracing\EventPayload $payload
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function WriteToAllListeners_2 ($eventName, $eventDescriptor, $tags, $pActivityId, $pChildActivityId, $payload){}
	/**
	 * @deprecated
	 * @param \System\String|string $eventName
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_1 ($eventName){}
	/**
	 * @deprecated
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventSourceOptions $options
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_2 ($eventName, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $eventName
	 * @param \T|object $data
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_3 ($eventName, $data){}
	/**
	 * @deprecated
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventSourceOptions $options
	 * @param \T|object $data
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_4 ($eventName, $options, $data){}
	/**
	 * @deprecated
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventSourceOptions& $options
	 * @param \T& $data
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_5 ($eventName, $options, $data){}
	/**
	 * @deprecated
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventSourceOptions& $options
	 * @param \System\Guid& $activityId
	 * @param \System\Guid& $relatedActivityId
	 * @param \T& $data
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Write_6 ($eventName, $options, $activityId, $relatedActivityId, $data){}
	/**
	 * @deprecated
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventSourceOptions& $options
	 * @param \System\Diagnostics\Tracing\TraceLoggingEventTypes $eventTypes
	 * @param \System\Guid* $activityID
	 * @param \System\Guid* $childActivityID
	 * @param \System\Object ...$values
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function WriteMultiMerge_1 ($eventName, $options, $eventTypes, $activityID, $childActivityID, ...$values){}
	/**
	 * @deprecated
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventSourceOptions& $options
	 * @param \System\Diagnostics\Tracing\TraceLoggingEventTypes $eventTypes
	 * @param \System\Guid* $activityID
	 * @param \System\Guid* $childActivityID
	 * @param \System\Diagnostics\Tracing\EventSource+EventData* $data
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function WriteMultiMerge_2 ($eventName, $options, $eventTypes, $activityID, $childActivityID, $data){}
	/**
	 * @param \System\String|string $eventSourceName
	 */
	#[MethodOverride]public function __construct_1 ($eventSourceName){}
	/**
	 * @param \System\String|string $eventSourceName
	 * @param \System\Diagnostics\Tracing\EventSourceSettings $config
	 */
	#[MethodOverride]public function __construct_2 ($eventSourceName, $config){}
	/**
	 * @param \System\String|string $eventSourceName
	 * @param \System\Diagnostics\Tracing\EventSourceSettings $config
	 * @param \System\String ...$traits
	 */
	#[MethodOverride]public function __construct_3 ($eventSourceName, $config, ...$traits){}
}
class EventSource extends \System\Object implements
	\System\IDisposable
{
	use EventSourceOverride;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $m_id;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventSource+EventMetadata[]
	 */
	protected $m_eventData;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventLevel
	 */
	protected $m_level;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 */
	protected $m_matchAnyKeyword;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventDispatcher
	 */
	protected $m_Dispatchers;
	/**
	 * @field
	 * @var \System\UInt64[]
	 */
	protected $m_channelData;
	/**
	 * @field
	 * @var \System\String|string
	 */
	const s_ActivityStartSuffix = 'Start';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const s_ActivityStopSuffix = 'Stop';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const DuplicateSourceNamesSwitch = 'System.Diagnostics.Tracing.EventSource.AllowDuplicateSourceNames';
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $Guid;
	/**
	 * @property
	 * @var \System\Diagnostics\Tracing\EventSourceSettings
	 * @since readonly
	 */
	public $Settings;
	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $ConstructionException;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $CurrentThreadActivityId;
	private static function InitializeIsSupported(){}
	/**
	 * @uses EventSourceOverride::IsEnabled_1 <br>public , args: ()<br>
	 * @uses EventSourceOverride::IsEnabled_2 <br>public , args: ($level, $keywords)<br>
	 * @uses EventSourceOverride::IsEnabled_3 <br>public , args: ($level, $keywords, $channel)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsEnabled (\override ...$args){}
	/**
	 * @param \System\Type $eventSourceType
	 * @return \System\Guid
	 */
	public static function GetGuid($eventSourceType){}
	/**
	 * @uses EventSourceOverride::GetName_1 <br>public , args: ($eventSourceType)<br>
	 * @uses EventSourceOverride::GetName_2 <br>private , args: ($eventSourceType, $flags)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetName (\override ...$args){}
	/**
	 * @uses EventSourceOverride::GenerateManifest_1 <br>public , args: ($eventSourceType, $assemblyPathToIncludeInManifest)<br>
	 * @uses EventSourceOverride::GenerateManifest_2 <br>public , args: ($eventSourceType, $assemblyPathToIncludeInManifest, $flags)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GenerateManifest (\override ...$args){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1[System\Diagnostics\Tracing\EventSource]
	 */
	public static function GetSources(){}
	/**
	 * @uses EventSourceOverride::SendCommand_1 <br>public , args: ($eventSource, $command, $commandArguments)<br>
	 * @uses EventSourceOverride::SendCommand_2 <br>protected , args: ($listener, $eventProviderType, $perEventSourceSessionId, $etwSessionId, $command, $enable, $level, $matchAnyKeyword, $commandArguments)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SendCommand (\override ...$args){}
	/**
	 * @param \System\String|string $key
	 * @return \System\String|string
	 */
	public function GetTrait($key){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Diagnostics\Tracing\EventCommandEventArgs]
	 * @return \System\Void|void
	 */
	public function add_EventCommandExecuted($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Diagnostics\Tracing\EventCommandEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_EventCommandExecuted($value){}
	/**
	 * @uses EventSourceOverride::SetCurrentThreadActivityId_1 <br>public , args: ($activityId)<br>
	 * @uses EventSourceOverride::SetCurrentThreadActivityId_2 <br>public , args: ($activityId, &$oldActivityThatWillContinue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SetCurrentThreadActivityId (\override ...$args){}
	private function DefineEventPipeEvents(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventCommandEventArgs $command
	 * @return \System\Void|void
	 */
	protected function OnEventCommand($command){}
	/**
	 * @uses EventSourceOverride::WriteEvent_1 <br>protected , args: ($eventId)<br>
	 * @uses EventSourceOverride::WriteEvent_2 <br>protected , args: ($eventId, $arg1)<br>
	 * @uses EventSourceOverride::WriteEvent_3 <br>protected , args: ($eventId, $arg1, $arg2)<br>
	 * @uses EventSourceOverride::WriteEvent_4 <br>protected , args: ($eventId, $arg1, $arg2, $arg3)<br>
	 * @uses EventSourceOverride::WriteEvent_5 <br>protected , args: ($eventId, $arg1)<br>
	 * @uses EventSourceOverride::WriteEvent_6 <br>protected , args: ($eventId, $arg1, $arg2)<br>
	 * @uses EventSourceOverride::WriteEvent_7 <br>protected , args: ($eventId, $arg1, $arg2, $arg3)<br>
	 * @uses EventSourceOverride::WriteEvent_8 <br>protected , args: ($eventId, $arg1)<br>
	 * @uses EventSourceOverride::WriteEvent_9 <br>protected , args: ($eventId, $arg1, $arg2)<br>
	 * @uses EventSourceOverride::WriteEvent_10 <br>protected , args: ($eventId, $arg1, $arg2, $arg3)<br>
	 * @uses EventSourceOverride::WriteEvent_11 <br>protected , args: ($eventId, $arg1, $arg2)<br>
	 * @uses EventSourceOverride::WriteEvent_12 <br>protected , args: ($eventId, $arg1, $arg2, $arg3)<br>
	 * @uses EventSourceOverride::WriteEvent_13 <br>protected , args: ($eventId, $arg1, $arg2)<br>
	 * @uses EventSourceOverride::WriteEvent_14 <br>protected , args: ($eventId, $arg1, $arg2)<br>
	 * @uses EventSourceOverride::WriteEvent_15 <br>protected , args: ($eventId, $arg1, $arg2)<br>
	 * @uses EventSourceOverride::WriteEvent_16 <br>protected , args: ($eventId, $arg1)<br>
	 * @uses EventSourceOverride::WriteEvent_17 <br>protected , args: ($eventId, $arg1, $arg2)<br>
	 * @uses EventSourceOverride::WriteEvent_18 <br>protected , args: ($eventId, ...$args)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function WriteEvent (\override ...$args){}
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\Int32|int $eventDataCount
	 * @param \System\Diagnostics\Tracing\EventSource+EventData* $data
	 * @return \System\Void|void
	 */
	protected function WriteEventCore($eventId, $eventDataCount, $data){}
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\Guid* $relatedActivityId
	 * @param \System\Int32|int $eventDataCount
	 * @param \System\Diagnostics\Tracing\EventSource+EventData* $data
	 * @return \System\Void|void
	 */
	protected function WriteEventWithRelatedActivityIdCore($eventId, $relatedActivityId, $eventDataCount, $data){}
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\Guid $relatedActivityId
	 * @param \System\Object ...$args
	 * @return \System\Void|void
	 */
	protected function WriteEventWithRelatedActivityId($eventId, $relatedActivityId, ...$args){}
	/**
	 * @uses EventSourceOverride::Dispose_1 <br>public , args: ()<br>
	 * @uses EventSourceOverride::Dispose_2 <br>protected , args: ($disposing)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Dispose (\override ...$args){}
	private function WriteEventRaw($eventName, $eventDescriptor, $eventHandle, $activityID, $relatedActivityID, $dataCount, $data){}
	private function Initialize($eventSourceGuid, $eventSourceName, $traits){}
	private static function GenerateGuidFromName($name){}
	private static function DecodeObjects($decodedObjects, $parameterTypes, $data){}
	private static function AssertValidString($data){}
	private function GetDispatcher($listener){}
	private function WriteEventVarargs($eventId, $childActivityID, $args){}
	private function SerializeEventArgs($eventId, $args){}
	private function LogEventArgsMismatches($eventId, $args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EventSourceOverride::WriteToAllListeners_1 <br>private , args: ($eventCallbackArgs, $eventDataCount, $data)<br>
	 * @uses EventSourceOverride::WriteToAllListeners_2 <br>private , args: ($eventName, $eventDescriptor, $tags, $pActivityId, $pChildActivityId, $payload)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function WriteToAllListeners (\override ...$args){}
	/**
	 * @param \System\Diagnostics\Tracing\EventWrittenEventArgs $eventCallbackArgs
	 * @return \System\Void|void
	 */
	protected function DispatchToAllListeners($eventCallbackArgs){}
	private function WriteEventString($msgString){}
	private function WriteStringToAllListeners($eventName, $msg){}
	private function IsEnabledByDefault($eventNum, $enable, $currentLevel, $currentMatchAnyKeyword){}
	private function IsEnabledCommon($enabled, $currentLevel, $currentMatchAnyKeyword, $eventLevel, $eventKeywords, $eventChannel){}
	private function ThrowEventSourceException($eventName, $innerEx){}
	/**
	 * @param \System\Diagnostics\Tracing\EventOpcode $opcode
	 * @param \System\String|string $eventName
	 * @return \System\Diagnostics\Tracing\EventOpcode
	 */
	protected static function GetOpcodeWithDefault($opcode, $eventName){}
	/**
	 * @param \System\Diagnostics\Tracing\EventCommandEventArgs $commandArgs
	 * @return \System\Void|void
	 */
	protected function DoCommand($commandArgs){}
	/**
	 * @param \System\Diagnostics\Tracing\EventDispatcher $dispatcher
	 * @param \System\Diagnostics\Tracing\EventProviderType $eventProviderType
	 * @param \System\Int32|int $eventId
	 * @param \System\Boolean|bool $value
	 * @return \System\Boolean|bool
	 */
	protected function EnableEventForDispatcher($dispatcher, $eventProviderType, $eventId, $value){}
	private function AnyEventEnabled(){}
	private function EnsureDescriptorsInitialized(){}
	private function SendManifest($rawManifest){}
	/**
	 * @param \System\Reflection\MemberInfo $member
	 * @param \System\Type $attributeType
	 * @param \System\Diagnostics\Tracing\EventManifestOptions $flags
	 * @return \System\Boolean|bool
	 */
	protected static function IsCustomAttributeDefinedHelper($member, $attributeType, $flags){}
	/**
	 * @param \System\Reflection\MemberInfo $member
	 * @param \System\Type $attributeType
	 * @param \System\Diagnostics\Tracing\EventManifestOptions $flags
	 * @return \System\Attribute
	 */
	protected static function GetCustomAttributeHelper($member, $attributeType, $flags){}
	private static function AttributeTypeNamesMatch($attributeType, $reflectedAttributeType){}
	private static function GetEventSourceBaseType($eventSourceType, $allowEventSourceOverride, $reflectionOnly){}
	private static function CreateManifestAndDescriptors($eventSourceType, $eventSourceDllName, $source, $flags){}
	private static function RemoveFirstArgIfRelatedActivityId($args){}
	private static function AddProviderEnumKind($manifest, $staticField, $providerEnumKind){}
	private static function AddEventDescriptor($eventData, $eventName, $eventAttribute, $eventParameters, $hasRelatedActivityID){}
	private static function TrimEventDescriptors($eventData){}
	/**
	 * @param \System\Diagnostics\Tracing\EventListener $listener
	 * @return \System\Void|void
	 */
	protected function AddListener($listener){}
	private static function DebugCheckEvent($eventsByName, $eventData, $method, $eventAttribute, $manifest, $options){}
	private static function GetHelperCallFirstArg($method){}
	/**
	 * @param \System\String|string $msg
	 * @return \System\Void|void
	 */
	protected function ReportOutOfBandMessage($msg){}
	private static function ValidateSettings($settings){}
	/**
	 * @uses EventSourceOverride::Write_1 <br>public , args: ($eventName)<br>
	 * @uses EventSourceOverride::Write_2 <br>public , args: ($eventName, $options)<br>
	 * @uses EventSourceOverride::Write_3 <br>public , args: ($eventName, $data)<br>
	 * @uses EventSourceOverride::Write_4 <br>public , args: ($eventName, $options, $data)<br>
	 * @uses EventSourceOverride::Write_5 <br>public , args: ($eventName, $options, $data)<br>
	 * @uses EventSourceOverride::Write_6 <br>public , args: ($eventName, $options, $activityId, $relatedActivityId, $data)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Write (\override ...$args){}
	/**
	 * @uses EventSourceOverride::WriteMultiMerge_1 <br>private , args: ($eventName, $options, $eventTypes, $activityID, $childActivityID, ...$values)<br>
	 * @uses EventSourceOverride::WriteMultiMerge_2 <br>protected , args: ($eventName, $options, $eventTypes, $activityID, $childActivityID, $data)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function WriteMultiMerge (\override ...$args){}
	private function WriteMultiMergeInner($eventName, $options, $eventTypes, $activityID, $childActivityID, ...$values){}
	private function WriteImpl($eventName, $options, $data, $pActivityId, $pRelatedActivityId, $eventTypes){}
	private static function WriteCleanup($pPins, $cPins){}
	private function InitializeProviderMetadata(){}
	private static function AddValueToMetaData($metaData, $value){}
	private static function HexDigit($c){}
	private function UpdateDescriptor($name, $eventInfo, $options, &$descriptor){}
	/**
	 * @uses EventSourceOverride::__construct_1 <br>public , args: ($eventSourceName)<br>
	 * @uses EventSourceOverride::__construct_2 <br>public , args: ($eventSourceName, $config)<br>
	 * @uses EventSourceOverride::__construct_3 <br>public , args: ($eventSourceName, $config, ...$traits)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}