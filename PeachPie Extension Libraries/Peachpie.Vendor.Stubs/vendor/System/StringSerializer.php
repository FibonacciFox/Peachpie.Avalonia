<?php
namespace System;
final class StringSerializer extends \System\ValueType
{

	/**
	 * @param \System\TimeZoneInfo $zone
	 * @return \System\String|string
	 */
	public static function GetSerializedString($zone){}
	/**
	 * @param \System\String|string $source
	 * @return \System\TimeZoneInfo
	 */
	public static function GetDeserializedTimeZoneInfo($source){}
	private static function SerializeSubstitute($text, $serializedText){}
	private static function SerializeTransitionTime($time, $serializedText){}
	private static function VerifyIsEscapableCharacter($c){}
	private function SkipVersionNextDataFields($depth){}
	private function GetNextStringValue(){}
	private function GetNextDateTimeValue($format){}
	private function GetNextTimeSpanValue(){}
	private function GetNextInt32Value(){}
	private function GetNextAdjustmentRuleArrayValue(){}
	private function GetNextAdjustmentRuleValue(){}
	private function GetNextTransitionTimeValue(){}
}