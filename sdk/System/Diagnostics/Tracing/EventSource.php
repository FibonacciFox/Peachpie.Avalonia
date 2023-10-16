<?php
namespace System\Diagnostics\Tracing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EventSourceMethodsOverride
{
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
	#[MethodOverride] public  function IsEnabled_3($level, $keywords, $channel){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetName_1($eventSourceType){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function GetName_2($eventSourceType, $flags){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GenerateManifest_1($eventSourceType, $assemblyPathToIncludeInManifest){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GenerateManifest_2($eventSourceType, $assemblyPathToIncludeInManifest, $flags){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SendCommand_1($eventSource, $command, $commandArguments){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SendCommand_2($listener, $eventProviderType, $perEventSourceSessionId, $etwSessionId, $command, $enable, $level, $matchAnyKeyword, $commandArguments){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetCurrentThreadActivityId_1($activityId){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SetCurrentThreadActivityId_2($activityId, $oldActivityThatWillContinue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_1($eventId){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_2($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_3($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_4($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_5($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_6($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_7($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_8($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_9($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_10($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_11($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_12($eventId, $arg1, $arg2, $arg3){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_13($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_14($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_15($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_16($eventId, $arg1){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_17($eventId, $arg1, $arg2){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteEvent_18($eventId, $args){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function WriteToAllListeners_1($eventCallbackArgs, $eventDataCount, $data){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function WriteToAllListeners_2($eventName, $eventDescriptor, $tags, $pActivityId, $pChildActivityId, $payload){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_1($eventName){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_2($eventName, $options){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_3($eventName, $data){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_4($eventName, $options, $data){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_5($eventName, $options, $data){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Write_6($eventName, $options, $activityId, $relatedActivityId, $data){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function WriteMultiMerge_1($eventName, $options, $eventTypes, $activityID, $childActivityID, $values){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function WriteMultiMerge_2($eventName, $options, $eventTypes, $activityID, $childActivityID, $data){}
}
/**
 */
class EventSource extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_id;
	/**
	 * @var \System\Diagnostics\Tracing\EventSource+EventMetadata[]
	 * @field
	 */
	protected $m_eventData;
	/**
	 * @var \System\Diagnostics\Tracing\EventLevel
	 * @field
	 */
	protected $m_level;
	/**
	 * @var \System\Diagnostics\Tracing\EventKeywords
	 * @field
	 */
	protected $m_matchAnyKeyword;
	/**
	 * @var \System\Diagnostics\Tracing\EventDispatcher
	 * @field
	 */
	protected $m_Dispatchers;
	/**
	 * @var \System\UInt64[]
	 * @field
	 */
	protected $m_channelData;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $s_ActivityStartSuffix;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $s_ActivityStopSuffix;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $DuplicateSourceNamesSwitch;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $Guid;
	/**
	 * @var \System\Diagnostics\Tracing\EventSourceSettings
	 * @property
	 */
	public readonly $Settings;
	/**
	 * @var \System\Exception
	 * @property
	 */
	public readonly $ConstructionException;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $CurrentThreadActivityId;
	/**
	 * @return \System\Boolean
	 */
	protected static function get_IsSupported(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeIsSupported(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Guid
	 */
	public  function get_Guid(){}
	/**
	 * @uses EventSourceMethodsOverride::IsEnabled_1 ()
	 * @uses EventSourceMethodsOverride::IsEnabled_2 ($level, $keywords)
	 * @uses EventSourceMethodsOverride::IsEnabled_3 ($level, $keywords, $channel)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsEnabled(mixed ...$args){}
	/**
	 * @return \System\Diagnostics\Tracing\EventSourceSettings
	 */
	public  function get_Settings(){}
	/**
	 * @param \System\Type $eventSourceType
	 * @return \System\Guid
	 */
	public static function GetGuid($eventSourceType){}
	/**
	 * @uses EventSourceMethodsOverride::GetName_1 ($eventSourceType)
	 * @uses EventSourceMethodsOverride::GetName_2 ($eventSourceType, $flags)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetName(mixed ...$args){}
	/**
	 * @uses EventSourceMethodsOverride::GenerateManifest_1 ($eventSourceType, $assemblyPathToIncludeInManifest)
	 * @uses EventSourceMethodsOverride::GenerateManifest_2 ($eventSourceType, $assemblyPathToIncludeInManifest, $flags)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GenerateManifest(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function GetSources(){}
	/**
	 * @uses EventSourceMethodsOverride::SendCommand_1 ($eventSource, $command, $commandArguments)
	 * @uses EventSourceMethodsOverride::SendCommand_2 ($listener, $eventProviderType, $perEventSourceSessionId, $etwSessionId, $command, $enable, $level, $matchAnyKeyword, $commandArguments)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SendCommand(mixed ...$args){}
	/**
	 * @return \System\Exception
	 */
	public  function get_ConstructionException(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\String|string
	 */
	public  function GetTrait($key){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_EventCommandExecuted($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_EventCommandExecuted($value){}
	/**
	 * @uses EventSourceMethodsOverride::SetCurrentThreadActivityId_1 ($activityId)
	 * @uses EventSourceMethodsOverride::SetCurrentThreadActivityId_2 ($activityId, $oldActivityThatWillContinue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SetCurrentThreadActivityId(mixed ...$args){}
	/**
	 * @return \System\Guid
	 */
	public static function get_CurrentThreadActivityId(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DefineEventPipeEvents(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventCommandEventArgs $command
	 * @return \System\Void|void
	 */
	protected  function OnEventCommand($command){}
	/**
	 * @uses EventSourceMethodsOverride::WriteEvent_1 ($eventId)
	 * @uses EventSourceMethodsOverride::WriteEvent_2 ($eventId, $arg1)
	 * @uses EventSourceMethodsOverride::WriteEvent_3 ($eventId, $arg1, $arg2)
	 * @uses EventSourceMethodsOverride::WriteEvent_4 ($eventId, $arg1, $arg2, $arg3)
	 * @uses EventSourceMethodsOverride::WriteEvent_5 ($eventId, $arg1)
	 * @uses EventSourceMethodsOverride::WriteEvent_6 ($eventId, $arg1, $arg2)
	 * @uses EventSourceMethodsOverride::WriteEvent_7 ($eventId, $arg1, $arg2, $arg3)
	 * @uses EventSourceMethodsOverride::WriteEvent_8 ($eventId, $arg1)
	 * @uses EventSourceMethodsOverride::WriteEvent_9 ($eventId, $arg1, $arg2)
	 * @uses EventSourceMethodsOverride::WriteEvent_10 ($eventId, $arg1, $arg2, $arg3)
	 * @uses EventSourceMethodsOverride::WriteEvent_11 ($eventId, $arg1, $arg2)
	 * @uses EventSourceMethodsOverride::WriteEvent_12 ($eventId, $arg1, $arg2, $arg3)
	 * @uses EventSourceMethodsOverride::WriteEvent_13 ($eventId, $arg1, $arg2)
	 * @uses EventSourceMethodsOverride::WriteEvent_14 ($eventId, $arg1, $arg2)
	 * @uses EventSourceMethodsOverride::WriteEvent_15 ($eventId, $arg1, $arg2)
	 * @uses EventSourceMethodsOverride::WriteEvent_16 ($eventId, $arg1)
	 * @uses EventSourceMethodsOverride::WriteEvent_17 ($eventId, $arg1, $arg2)
	 * @uses EventSourceMethodsOverride::WriteEvent_18 ($eventId, $args)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteEvent(mixed ...$args){}
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\Int32|int $eventDataCount
	 * @param \System\Diagnostics\Tracing\EventData* $data
	 * @return \System\Void|void
	 */
	protected  function WriteEventCore($eventId, $eventDataCount, $data){}
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\Guid* $relatedActivityId
	 * @param \System\Int32|int $eventDataCount
	 * @param \System\Diagnostics\Tracing\EventData* $data
	 * @return \System\Void|void
	 */
	protected  function WriteEventWithRelatedActivityIdCore($eventId, $relatedActivityId, $eventDataCount, $data){}
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\Guid $relatedActivityId
	 * @param \System\Object[] $args
	 * @return \System\Void|void
	 */
	protected  function WriteEventWithRelatedActivityId($eventId, $relatedActivityId, $args){}
	/**
	 * @uses EventSourceMethodsOverride::Dispose_1 ()
	 * @uses EventSourceMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventDescriptor& $eventDescriptor
	 * @param \System\IntPtr $eventHandle
	 * @param \System\Guid* $activityID
	 * @param \System\Guid* $relatedActivityID
	 * @param \System\Int32|int $dataCount
	 * @param \System\IntPtr $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteEventRaw($eventName, $eventDescriptor, $eventHandle, $activityID, $relatedActivityID, $dataCount, $data){}
	/**
	 * @param \System\Guid $eventSourceGuid
	 * @param \System\String|string $eventSourceName
	 * @param \System\String[] $traits
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($eventSourceGuid, $eventSourceName, $traits){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GenerateGuidFromName($name){}
	/**
	 * @param \System\Object[] $decodedObjects
	 * @param \System\Type[] $parameterTypes
	 * @param \System\Diagnostics\Tracing\EventData* $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DecodeObjects($decodedObjects, $parameterTypes, $data){}
	/**
	 * @param \System\Diagnostics\Tracing\EventData* $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AssertValidString($data){}
	/**
	 * @param \System\Diagnostics\Tracing\EventListener $listener
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDispatcher($listener){}
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\Guid* $childActivityID
	 * @param \System\Object[] $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteEventVarargs($eventId, $childActivityID, $args){}
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\Object[] $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SerializeEventArgs($eventId, $args){}
	/**
	 * @param \System\Int32|int $eventId
	 * @param \System\Object[] $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LogEventArgsMismatches($eventId, $args){}
	/**
	 * @uses EventSourceMethodsOverride::WriteToAllListeners_1 ($eventCallbackArgs, $eventDataCount, $data)
	 * @uses EventSourceMethodsOverride::WriteToAllListeners_2 ($eventName, $eventDescriptor, $tags, $pActivityId, $pChildActivityId, $payload)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteToAllListeners(mixed ...$args){}
	/**
	 * @param \System\Diagnostics\Tracing\EventWrittenEventArgs $eventCallbackArgs
	 * @return \System\Void|void
	 */
	protected  function DispatchToAllListeners($eventCallbackArgs){}
	/**
	 * @param \System\String|string $msgString
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteEventString($msgString){}
	/**
	 * @param \System\String|string $eventName
	 * @param \System\String|string $msg
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteStringToAllListeners($eventName, $msg){}
	/**
	 * @param \System\Int32|int $eventNum
	 * @param \System\Boolean $enable
	 * @param \System\Diagnostics\Tracing\EventLevel $currentLevel
	 * @param \System\Diagnostics\Tracing\EventKeywords $currentMatchAnyKeyword
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsEnabledByDefault($eventNum, $enable, $currentLevel, $currentMatchAnyKeyword){}
	/**
	 * @param \System\Boolean $enabled
	 * @param \System\Diagnostics\Tracing\EventLevel $currentLevel
	 * @param \System\Diagnostics\Tracing\EventKeywords $currentMatchAnyKeyword
	 * @param \System\Diagnostics\Tracing\EventLevel $eventLevel
	 * @param \System\Diagnostics\Tracing\EventKeywords $eventKeywords
	 * @param \System\Diagnostics\Tracing\EventChannel $eventChannel
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsEnabledCommon($enabled, $currentLevel, $currentMatchAnyKeyword, $eventLevel, $eventKeywords, $eventChannel){}
	/**
	 * @param \System\String|string $eventName
	 * @param \System\Exception $innerEx
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowEventSourceException($eventName, $innerEx){}
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
	protected  function DoCommand($commandArgs){}
	/**
	 * @param \System\Diagnostics\Tracing\EventDispatcher $dispatcher
	 * @param \System\Diagnostics\Tracing\EventProviderType $eventProviderType
	 * @param \System\Int32|int $eventId
	 * @param \System\Boolean $value
	 * @return \System\Boolean
	 */
	protected  function EnableEventForDispatcher($dispatcher, $eventProviderType, $eventId, $value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AnyEventEnabled(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsDisposed(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureDescriptorsInitialized(){}
	/**
	 * @param \System\Byte[] $rawManifest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SendManifest($rawManifest){}
	/**
	 * @param \System\Reflection\MemberInfo $member
	 * @param \System\Type $attributeType
	 * @param \System\Diagnostics\Tracing\EventManifestOptions $flags
	 * @return \System\Boolean
	 */
	protected static function IsCustomAttributeDefinedHelper($member, $attributeType, $flags){}
	/**
	 * @param \System\Reflection\MemberInfo $member
	 * @param \System\Type $attributeType
	 * @param \System\Diagnostics\Tracing\EventManifestOptions $flags
	 * @return \System\Attribute
	 */
	protected static function GetCustomAttributeHelper($member, $attributeType, $flags){}
	/**
	 * @param \System\Type $attributeType
	 * @param \System\Type $reflectedAttributeType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AttributeTypeNamesMatch($attributeType, $reflectedAttributeType){}
	/**
	 * @param \System\Type $eventSourceType
	 * @param \System\Boolean $allowEventSourceOverride
	 * @param \System\Boolean $reflectionOnly
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEventSourceBaseType($eventSourceType, $allowEventSourceOverride, $reflectionOnly){}
	/**
	 * @param \System\Type $eventSourceType
	 * @param \System\String|string $eventSourceDllName
	 * @param \System\Diagnostics\Tracing\EventSource $source
	 * @param \System\Diagnostics\Tracing\EventManifestOptions $flags
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateManifestAndDescriptors($eventSourceType, $eventSourceDllName, $source, $flags){}
	/**
	 * @param \System\Reflection\ParameterInfo[]& $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RemoveFirstArgIfRelatedActivityId($args){}
	/**
	 * @param \System\Diagnostics\Tracing\ManifestBuilder $manifest
	 * @param \System\Reflection\FieldInfo $staticField
	 * @param \System\String|string $providerEnumKind
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddProviderEnumKind($manifest, $staticField, $providerEnumKind){}
	/**
	 * @param \System\Diagnostics\Tracing\EventMetadata[]& $eventData
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventAttribute $eventAttribute
	 * @param \System\Reflection\ParameterInfo[] $eventParameters
	 * @param \System\Boolean $hasRelatedActivityID
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddEventDescriptor($eventData, $eventName, $eventAttribute, $eventParameters, $hasRelatedActivityID){}
	/**
	 * @param \System\Diagnostics\Tracing\EventMetadata[]& $eventData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TrimEventDescriptors($eventData){}
	/**
	 * @param \System\Diagnostics\Tracing\EventListener $listener
	 * @return \System\Void|void
	 */
	protected  function AddListener($listener){}
	/**
	 * @param \System\Collections\Generic\Dictionary_2& $eventsByName
	 * @param \System\Diagnostics\Tracing\EventMetadata[] $eventData
	 * @param \System\Reflection\MethodInfo $method
	 * @param \System\Diagnostics\Tracing\EventAttribute $eventAttribute
	 * @param \System\Diagnostics\Tracing\ManifestBuilder $manifest
	 * @param \System\Diagnostics\Tracing\EventManifestOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DebugCheckEvent($eventsByName, $eventData, $method, $eventAttribute, $manifest, $options){}
	/**
	 * @param \System\Reflection\MethodInfo $method
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetHelperCallFirstArg($method){}
	/**
	 * @param \System\String|string $msg
	 * @return \System\Void|void
	 */
	protected  function ReportOutOfBandMessage($msg){}
	/**
	 * @param \System\Diagnostics\Tracing\EventSourceSettings $settings
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateSettings($settings){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_ThrowOnEventWriteErrors(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SelfDescribingEvents(){}
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	protected  function get_ProviderMetadata(){}
	/**
	 * @uses EventSourceMethodsOverride::Write_1 ($eventName)
	 * @uses EventSourceMethodsOverride::Write_2 ($eventName, $options)
	 * @uses EventSourceMethodsOverride::Write_3 ($eventName, $data)
	 * @uses EventSourceMethodsOverride::Write_4 ($eventName, $options, $data)
	 * @uses EventSourceMethodsOverride::Write_5 ($eventName, $options, $data)
	 * @uses EventSourceMethodsOverride::Write_6 ($eventName, $options, $activityId, $relatedActivityId, $data)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Write(mixed ...$args){}
	/**
	 * @uses EventSourceMethodsOverride::WriteMultiMerge_1 ($eventName, $options, $eventTypes, $activityID, $childActivityID, $values)
	 * @uses EventSourceMethodsOverride::WriteMultiMerge_2 ($eventName, $options, $eventTypes, $activityID, $childActivityID, $data)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function WriteMultiMerge(mixed ...$args){}
	/**
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventSourceOptions& $options
	 * @param \System\Diagnostics\Tracing\TraceLoggingEventTypes $eventTypes
	 * @param \System\Guid* $activityID
	 * @param \System\Guid* $childActivityID
	 * @param \System\Object[] $values
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteMultiMergeInner($eventName, $options, $eventTypes, $activityID, $childActivityID, $values){}
	/**
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventSourceOptions& $options
	 * @param \System\Object|object $data
	 * @param \System\Guid* $pActivityId
	 * @param \System\Guid* $pRelatedActivityId
	 * @param \System\Diagnostics\Tracing\TraceLoggingEventTypes $eventTypes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteImpl($eventName, $options, $data, $pActivityId, $pRelatedActivityId, $eventTypes){}
	/**
	 * @param \System\Runtime\InteropServices\GCHandle* $pPins
	 * @param \System\Int32|int $cPins
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteCleanup($pPins, $cPins){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeProviderMetadata(){}
	/**
	 * @param \System\Collections\Generic\List_1 $metaData
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddValueToMetaData($metaData, $value){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HexDigit($c){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Diagnostics\Tracing\TraceLoggingEventTypes $eventInfo
	 * @param \System\Diagnostics\Tracing\EventSourceOptions& $options
	 * @param \System\Diagnostics\Tracing\EventDescriptor& $descriptor
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateDescriptor($name, $eventInfo, $options, $descriptor){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
