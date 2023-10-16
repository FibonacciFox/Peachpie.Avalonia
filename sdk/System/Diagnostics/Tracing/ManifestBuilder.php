<?php
namespace System\Diagnostics\Tracing;
/**
 */
class ManifestBuilder extends \System\Object
{
	/**
	 * @var \System\Collections\Generic\IList_1[System\String]
	 * @property
	 */
	public readonly $Errors;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasResources;
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function AddOpcode($name, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function AddTask($name, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public  function AddKeyword($name, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $value
	 * @param \System\Diagnostics\Tracing\EventChannelAttribute $channelAttribute
	 * @return \System\Void|void
	 */
	public  function AddChannel($name, $value, $channelAttribute){}
	/**
	 * @param \System\Diagnostics\Tracing\EventChannel $channel
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EventChannelToChannelType($channel){}
	/**
	 * @param \System\Diagnostics\Tracing\EventChannel $channel
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDefaultChannelAttribute($channel){}
	/**
	 * @return \System\UInt64[]
	 */
	public  function GetChannelData(){}
	/**
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventAttribute $eventAttribute
	 * @return \System\Void|void
	 */
	public  function StartEvent($eventName, $eventAttribute){}
	/**
	 * @param \System\Type $type
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	public  function AddEventParameter($type, $name){}
	/**
	 * @return \System\Void|void
	 */
	public  function EndEvent(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventChannel $channel
	 * @param \System\UInt64 $channelKeyword
	 * @return \System\UInt64
	 */
	public  function GetChannelKeyword($channel, $channelKeyword){}
	/**
	 * @return \System\Byte[]
	 */
	public  function CreateManifest(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_Errors(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasResources(){}
	/**
	 * @param \System\String|string $msg
	 * @param \System\Boolean $runtimeCritical
	 * @return \System\Void|void
	 */
	public  function ManifestError($msg, $runtimeCritical){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateManifestString(){}
	/**
	 * @param \System\Text\StringBuilder $stringBuilder
	 * @param \System\String|string $elementName
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteNameAndMessageAttribs($stringBuilder, $elementName, $name){}
	/**
	 * @param \System\Text\StringBuilder $stringBuilder
	 * @param \System\String|string $elementName
	 * @param \System\String|string $name
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteMessageAttrib($stringBuilder, $elementName, $name, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Globalization\CultureInfo $ci
	 * @param \System\Boolean $etwFormat
	 * @return \System\String|string
	 */
	protected  function GetLocalizedMessage($key, $ci, $etwFormat){}
	/**
	 * @param \System\Text\StringBuilder $sb
	 * @param \System\Diagnostics\Tracing\EventLevel $level
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AppendLevelName($sb, $level){}
	/**
	 * @param \System\Diagnostics\Tracing\EventChannel $channel
	 * @param \System\String|string $eventName
	 * @param \System\String|string $eventMessage
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetChannelName($channel, $eventName, $eventMessage){}
	/**
	 * @param \System\Diagnostics\Tracing\EventTask $task
	 * @param \System\String|string $eventName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTaskName($task, $eventName){}
	/**
	 * @param \System\Diagnostics\Tracing\EventOpcode $opcode
	 * @param \System\String|string $eventName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetOpcodeName($opcode, $eventName){}
	/**
	 * @param \System\Text\StringBuilder $sb
	 * @param \System\UInt64 $keywords
	 * @param \System\String|string $eventName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AppendKeywords($sb, $keywords, $eventName){}
	/**
	 * @param \System\Type $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTypeName($type){}
	/**
	 * @param \System\Text\StringBuilder& $stringBuilder
	 * @param \System\String|string $eventMessage
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UpdateStringBuilder($stringBuilder, $eventMessage, $startIndex, $count){}
	/**
	 * @param \System\String|string $eventMessage
	 * @param \System\String|string $evtName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TranslateToManifestConvention($eventMessage, $evtName){}
	/**
	 * @param \System\Int32|int $idx
	 * @param \System\String|string $evtName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TranslateIndexToManifestConvention($idx, $evtName){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
