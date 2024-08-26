<?php
namespace System\Diagnostics\Tracing;
final class ManifestBuilder extends \System\Object
{
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[System\String]
	 * @since readonly
	 */
	public $Errors;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasResources;
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public function AddOpcode($name, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public function AddTask($name, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public function AddKeyword($name, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Int32|int $value
	 * @param \System\Diagnostics\Tracing\EventChannelAttribute $channelAttribute
	 * @return \System\Void|void
	 */
	public function AddChannel($name, $value, $channelAttribute){}
	private static function EventChannelToChannelType($channel){}
	private static function GetDefaultChannelAttribute($channel){}
	/**
	 * @return \System\UInt64[]
	 */
	public function GetChannelData(){}
	/**
	 * @param \System\String|string $eventName
	 * @param \System\Diagnostics\Tracing\EventAttribute $eventAttribute
	 * @return \System\Void|void
	 */
	public function StartEvent($eventName, $eventAttribute){}
	/**
	 * @param \System\Type $type
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	public function AddEventParameter($type, $name){}
	/**
	 * @return \System\Void|void
	 */
	public function EndEvent(){}
	/**
	 * @param \System\Diagnostics\Tracing\EventChannel $channel
	 * @param \System\UInt64 $channelKeyword
	 * @return \System\UInt64
	 */
	public function GetChannelKeyword($channel, $channelKeyword){}
	/**
	 * @return \System\Byte[]
	 */
	public function CreateManifest(){}
	/**
	 * @param \System\String|string $msg
	 * @param \System\Boolean|bool $runtimeCritical
	 * @return \System\Void|void
	 */
	public function ManifestError($msg, $runtimeCritical){}
	private function CreateManifestString(){}
	private function WriteNameAndMessageAttribs($stringBuilder, $elementName, $name){}
	private function WriteMessageAttrib($stringBuilder, $elementName, $name, $value){}
	/**
	 * @param \System\String|string $key
	 * @param \System\Globalization\CultureInfo $ci
	 * @param \System\Boolean|bool $etwFormat
	 * @return \System\String|string
	 */
	protected function GetLocalizedMessage($key, $ci, $etwFormat){}
	private static function AppendLevelName($sb, $level){}
	private function GetChannelName($channel, $eventName, $eventMessage){}
	private function GetTaskName($task, $eventName){}
	private function GetOpcodeName($opcode, $eventName){}
	private function AppendKeywords($sb, $keywords, $eventName){}
	private function GetTypeName($type){}
	private static function UpdateStringBuilder($stringBuilder, $eventMessage, $startIndex, $count){}
	private function TranslateToManifestConvention($eventMessage, $evtName){}
	private function TranslateIndexToManifestConvention($idx, $evtName){}
	/**
	 * @param \System\String|string $providerName
	 * @param \System\Guid $providerGuid
	 * @param \System\String|string $dllName
	 * @param \System\Resources\ResourceManager $resources
	 * @param \System\Diagnostics\Tracing\EventManifestOptions $flags
	 */
	public function __construct($providerName, $providerGuid, $dllName, $resources, $flags){}
}