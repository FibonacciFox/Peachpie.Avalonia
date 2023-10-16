<?php
namespace System;
/**
 */
class StringSerializer extends \System\ValueType
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
	/**
	 * @param \System\String|string $text
	 * @param \System\Text\ValueStringBuilder& $serializedText
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SerializeSubstitute($text, $serializedText){}
	/**
	 * @param \System\TransitionTime $time
	 * @param \System\Text\ValueStringBuilder& $serializedText
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SerializeTransitionTime($time, $serializedText){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function VerifyIsEscapableCharacter($c){}
	/**
	 * @param \System\Int32|int $depth
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SkipVersionNextDataFields($depth){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNextStringValue(){}
	/**
	 * @param \System\String|string $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNextDateTimeValue($format){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNextTimeSpanValue(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNextInt32Value(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNextAdjustmentRuleArrayValue(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNextAdjustmentRuleValue(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetNextTransitionTimeValue(){}
}
