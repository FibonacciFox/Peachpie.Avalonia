<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TimeZoneInfoMethodsOverride
{
	/**
	 * @return \System\TimeSpan[]
	 */
	#[MethodOverride] public  function GetAmbiguousTimeOffsets_1($dateTimeOffset){}
	/**
	 * @return \System\TimeSpan[]
	 */
	#[MethodOverride] public  function GetAmbiguousTimeOffsets_2($dateTime){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public  function GetUtcOffset_1($dateTimeOffset){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] public  function GetUtcOffset_2($dateTime){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] protected  function GetUtcOffset_3($dateTime, $flags){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] private  function GetUtcOffset_4($dateTime, $flags, $cachedData){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] private static function GetUtcOffset_5($time, $zone){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] private static function GetUtcOffset_6($baseUtcOffset, $adjustmentRule){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAmbiguousTime_1($dateTimeOffset){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAmbiguousTime_2($dateTime){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function IsAmbiguousTime_3($dateTime, $flags){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsDaylightSavingTime_1($dateTimeOffset){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsDaylightSavingTime_2($dateTime){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function IsDaylightSavingTime_3($dateTime, $flags){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function IsDaylightSavingTime_4($dateTime, $flags, $cachedData){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function ConvertTimeBySystemTimeZoneId_1($dateTimeOffset, $destinationTimeZoneId){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function ConvertTimeBySystemTimeZoneId_2($dateTime, $destinationTimeZoneId){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function ConvertTimeBySystemTimeZoneId_3($dateTime, $sourceTimeZoneId, $destinationTimeZoneId){}
	/**
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride] public static function ConvertTime_1($dateTimeOffset, $destinationTimeZone){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function ConvertTime_2($dateTime, $destinationTimeZone){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function ConvertTime_3($dateTime, $sourceTimeZone, $destinationTimeZone){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] protected static function ConvertTime_4($dateTime, $sourceTimeZone, $destinationTimeZone, $flags){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] private static function ConvertTime_5($dateTime, $sourceTimeZone, $destinationTimeZone, $flags, $cachedData){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function ConvertTimeToUtc_1($dateTime){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] protected static function ConvertTimeToUtc_2($dateTime, $flags){}
	/**
	 * @return \System\DateTime
	 */
	#[MethodOverride] public static function ConvertTimeToUtc_3($dateTime, $sourceTimeZone){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride] public static function CreateCustomTimeZone_1($id, $baseUtcOffset, $displayName, $standardDisplayName){}
	/**
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride] public static function CreateCustomTimeZone_2($id, $baseUtcOffset, $displayName, $standardDisplayName, $daylightDisplayName, $adjustmentRules){}
	/**
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride] public static function CreateCustomTimeZone_3($id, $baseUtcOffset, $displayName, $standardDisplayName, $daylightDisplayName, $adjustmentRules, $disableDaylightSavingTime){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryConvertIanaIdToWindowsId_1($ianaId, $windowsId){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryConvertIanaIdToWindowsId_2($ianaId, $allocate, $windowsId){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryConvertWindowsIdToIanaId_1($windowsId, $ianaId){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryConvertWindowsIdToIanaId_2($windowsId, $region, $ianaId){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryConvertWindowsIdToIanaId_3($windowsId, $region, $allocate, $ianaId){}
	/**
	 * @return \System\AdjustmentRule
	 */
	#[MethodOverride] private  function GetAdjustmentRuleForTime_1($dateTime, $ruleIndex){}
	/**
	 * @return \System\AdjustmentRule
	 */
	#[MethodOverride] private  function GetAdjustmentRuleForTime_2($dateTime, $dateTimeisUtc, $ruleIndex){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] private static function GetUtcOffsetFromUtc_1($time, $zone){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] private static function GetUtcOffsetFromUtc_2($time, $zone, $isDaylightSavings){}
	/**
	 * @return \System\TimeSpan
	 */
	#[MethodOverride] protected static function GetUtcOffsetFromUtc_3($time, $zone, $isDaylightSavings, $isAmbiguousLocalDst){}
	/**
	 * @return \System\TimeZoneInfoResult
	 */
	#[MethodOverride] private static function TryGetTimeZoneFromLocalMachine_1($id, $dstDisabled, $value, $e, $cachedData){}
	/**
	 * @return \System\TimeZoneInfoResult
	 */
	#[MethodOverride] private static function TryGetTimeZoneFromLocalMachine_2($id, $value, $e){}
}
/**
 */
class TimeZoneInfo extends \System\Object implements 
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Id;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasIanaId;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $DisplayName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $StandardName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $DaylightName;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public readonly $BaseUtcOffset;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $SupportsDaylightSavingTime;
	/**
	 * @var \System\TimeZoneInfo
	 * @property
	 */
	public readonly $Local;
	/**
	 * @var \System\TimeZoneInfo
	 * @property
	 */
	public readonly $Utc;
	/**
	 * @return \System\String|string
	 */
	public  function get_Id(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasIanaId(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DisplayName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_StandardName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DaylightName(){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_BaseUtcOffset(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SupportsDaylightSavingTime(){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::GetAmbiguousTimeOffsets_1 ($dateTimeOffset)
	 * @uses TimeZoneInfoMethodsOverride::GetAmbiguousTimeOffsets_2 ($dateTime)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAmbiguousTimeOffsets(mixed ...$args){}
	/**
	 * @param \System\DateTime $adjustedTime
	 * @param \System\Nullable_1& $ruleIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetAdjustmentRuleForAmbiguousOffsets($adjustedTime, $ruleIndex){}
	/**
	 * @param \System\AdjustmentRule $rule
	 * @param \System\Nullable_1 $ruleIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPreviousAdjustmentRule($rule, $ruleIndex){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::GetUtcOffset_1 ($dateTimeOffset)
	 * @uses TimeZoneInfoMethodsOverride::GetUtcOffset_2 ($dateTime)
	 * @uses TimeZoneInfoMethodsOverride::GetUtcOffset_3 ($dateTime, $flags)
	 * @uses TimeZoneInfoMethodsOverride::GetUtcOffset_4 ($dateTime, $flags, $cachedData)
	 * @uses TimeZoneInfoMethodsOverride::GetUtcOffset_5 ($time, $zone)
	 * @uses TimeZoneInfoMethodsOverride::GetUtcOffset_6 ($baseUtcOffset, $adjustmentRule)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetUtcOffset(mixed ...$args){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfoOptions $flags
	 * @return \System\TimeSpan
	 */
	protected static function GetLocalUtcOffset($dateTime, $flags){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::IsAmbiguousTime_1 ($dateTimeOffset)
	 * @uses TimeZoneInfoMethodsOverride::IsAmbiguousTime_2 ($dateTime)
	 * @uses TimeZoneInfoMethodsOverride::IsAmbiguousTime_3 ($dateTime, $flags)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAmbiguousTime(mixed ...$args){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::IsDaylightSavingTime_1 ($dateTimeOffset)
	 * @uses TimeZoneInfoMethodsOverride::IsDaylightSavingTime_2 ($dateTime)
	 * @uses TimeZoneInfoMethodsOverride::IsDaylightSavingTime_3 ($dateTime, $flags)
	 * @uses TimeZoneInfoMethodsOverride::IsDaylightSavingTime_4 ($dateTime, $flags, $cachedData)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsDaylightSavingTime(mixed ...$args){}
	/**
	 * @param \System\DateTime $dateTime
	 * @return \System\Boolean
	 */
	public  function IsInvalidTime($dateTime){}
	/**
	 * @return \System\Void|void
	 */
	public static function ClearCachedData(){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::ConvertTimeBySystemTimeZoneId_1 ($dateTimeOffset, $destinationTimeZoneId)
	 * @uses TimeZoneInfoMethodsOverride::ConvertTimeBySystemTimeZoneId_2 ($dateTime, $destinationTimeZoneId)
	 * @uses TimeZoneInfoMethodsOverride::ConvertTimeBySystemTimeZoneId_3 ($dateTime, $sourceTimeZoneId, $destinationTimeZoneId)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ConvertTimeBySystemTimeZoneId(mixed ...$args){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::ConvertTime_1 ($dateTimeOffset, $destinationTimeZone)
	 * @uses TimeZoneInfoMethodsOverride::ConvertTime_2 ($dateTime, $destinationTimeZone)
	 * @uses TimeZoneInfoMethodsOverride::ConvertTime_3 ($dateTime, $sourceTimeZone, $destinationTimeZone)
	 * @uses TimeZoneInfoMethodsOverride::ConvertTime_4 ($dateTime, $sourceTimeZone, $destinationTimeZone, $flags)
	 * @uses TimeZoneInfoMethodsOverride::ConvertTime_5 ($dateTime, $sourceTimeZone, $destinationTimeZone, $flags, $cachedData)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ConvertTime(mixed ...$args){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfo $destinationTimeZone
	 * @return \System\DateTime
	 */
	public static function ConvertTimeFromUtc($dateTime, $destinationTimeZone){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::ConvertTimeToUtc_1 ($dateTime)
	 * @uses TimeZoneInfoMethodsOverride::ConvertTimeToUtc_2 ($dateTime, $flags)
	 * @uses TimeZoneInfoMethodsOverride::ConvertTimeToUtc_3 ($dateTime, $sourceTimeZone)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ConvertTimeToUtc(mixed ...$args){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::Equals_1 ($other)
	 * @uses TimeZoneInfoMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\String|string $source
	 * @return \System\TimeZoneInfo
	 */
	public static function FromSerializedString($source){}
	/**
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1
	 */
	public static function GetSystemTimeZones(){}
	/**
	 * @param \System\TimeZoneInfo $other
	 * @return \System\Boolean
	 */
	public  function HasSameRules($other){}
	/**
	 * @return \System\TimeZoneInfo
	 */
	public static function get_Local(){}
	/**
	 * @return \System\String|string
	 */
	public  function ToSerializedString(){}
	/**
	 * @return \System\TimeZoneInfo
	 */
	public static function get_Utc(){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::CreateCustomTimeZone_1 ($id, $baseUtcOffset, $displayName, $standardDisplayName)
	 * @uses TimeZoneInfoMethodsOverride::CreateCustomTimeZone_2 ($id, $baseUtcOffset, $displayName, $standardDisplayName, $daylightDisplayName, $adjustmentRules)
	 * @uses TimeZoneInfoMethodsOverride::CreateCustomTimeZone_3 ($id, $baseUtcOffset, $displayName, $standardDisplayName, $daylightDisplayName, $adjustmentRules, $disableDaylightSavingTime)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateCustomTimeZone(mixed ...$args){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::TryConvertIanaIdToWindowsId_1 ($ianaId, $windowsId)
	 * @uses TimeZoneInfoMethodsOverride::TryConvertIanaIdToWindowsId_2 ($ianaId, $allocate, $windowsId)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertIanaIdToWindowsId(mixed ...$args){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::TryConvertWindowsIdToIanaId_1 ($windowsId, $ianaId)
	 * @uses TimeZoneInfoMethodsOverride::TryConvertWindowsIdToIanaId_2 ($windowsId, $region, $ianaId)
	 * @uses TimeZoneInfoMethodsOverride::TryConvertWindowsIdToIanaId_3 ($windowsId, $region, $allocate, $ianaId)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryConvertWindowsIdToIanaId(mixed ...$args){}
	/**
	 * @param \System\Object|object $sender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeserialization($sender){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($info, $context){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::GetAdjustmentRuleForTime_1 ($dateTime, $ruleIndex)
	 * @uses TimeZoneInfoMethodsOverride::GetAdjustmentRuleForTime_2 ($dateTime, $dateTimeisUtc, $ruleIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAdjustmentRuleForTime(mixed ...$args){}
	/**
	 * @param \System\AdjustmentRule $rule
	 * @param \System\AdjustmentRule $previousRule
	 * @param \System\DateTime $dateTime
	 * @param \System\DateTime $dateOnly
	 * @param \System\Boolean $dateTimeisUtc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompareAdjustmentRuleToDateTime($rule, $previousRule, $dateTime, $dateOnly, $dateTimeisUtc){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeSpan $daylightDelta
	 * @param \System\TimeSpan $baseUtcOffsetDelta
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertToUtc($dateTime, $daylightDelta, $baseUtcOffsetDelta){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeSpan $daylightDelta
	 * @param \System\TimeSpan $baseUtcOffsetDelta
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertFromUtc($dateTime, $daylightDelta, $baseUtcOffsetDelta){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeSpan $daylightDelta
	 * @param \System\TimeSpan $baseUtcOffsetDelta
	 * @param \System\Boolean $convertToUtc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertToFromUtc($dateTime, $daylightDelta, $baseUtcOffsetDelta, $convertToUtc){}
	/**
	 * @param \System\Int64|int $ticks
	 * @param \System\TimeZoneInfo $destinationTimeZone
	 * @param \System\Boolean& $isAmbiguousLocalDst
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertUtcToTimeZone($ticks, $destinationTimeZone, $isAmbiguousLocalDst){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\AdjustmentRule $rule
	 * @param \System\Nullable_1 $ruleIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDaylightTime($year, $rule, $ruleIndex){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\AdjustmentRule $rule
	 * @param \System\Globalization\DaylightTimeStruct $daylightTime
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIsDaylightSavings($time, $rule, $daylightTime){}
	/**
	 * @param \System\TimeSpan $baseUtcOffset
	 * @param \System\AdjustmentRule $rule
	 * @param \System\Nullable_1 $ruleIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDaylightSavingsStartOffsetFromUtc($baseUtcOffset, $rule, $ruleIndex){}
	/**
	 * @param \System\TimeSpan $baseUtcOffset
	 * @param \System\AdjustmentRule $rule
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDaylightSavingsEndOffsetFromUtc($baseUtcOffset, $rule){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $year
	 * @param \System\TimeSpan $utc
	 * @param \System\AdjustmentRule $rule
	 * @param \System\Nullable_1 $ruleIndex
	 * @param \System\Boolean& $isAmbiguousLocalDst
	 * @param \System\TimeZoneInfo $zone
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIsDaylightSavingsFromUtc($time, $year, $utc, $rule, $ruleIndex, $isAmbiguousLocalDst, $zone){}
	/**
	 * @param \System\Int32|int $nextYear
	 * @param \System\TimeSpan $utc
	 * @param \System\TimeZoneInfo $zone
	 * @param \System\DateTime& $dstEnd
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetEndOfDstIfYearStartWithDst($nextYear, $utc, $zone, $dstEnd){}
	/**
	 * @param \System\Int32|int $previousYear
	 * @param \System\TimeSpan $utc
	 * @param \System\TimeZoneInfo $zone
	 * @param \System\DateTime& $dstStart
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetStartOfDstIfYearEndWithDst($previousYear, $utc, $zone, $dstStart){}
	/**
	 * @param \System\DateTime $startTime
	 * @param \System\DateTime $time
	 * @param \System\DateTime $endTime
	 * @param \System\Boolean $ignoreYearAdjustment
	 * @param \System\AdjustmentRule $rule
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckIsDst($startTime, $time, $endTime, $ignoreYearAdjustment, $rule){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\AdjustmentRule $rule
	 * @param \System\Globalization\DaylightTimeStruct $daylightTime
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIsAmbiguousTime($time, $rule, $daylightTime){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\AdjustmentRule $rule
	 * @param \System\Globalization\DaylightTimeStruct $daylightTime
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIsInvalidTime($time, $rule, $daylightTime){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::GetUtcOffsetFromUtc_1 ($time, $zone)
	 * @uses TimeZoneInfoMethodsOverride::GetUtcOffsetFromUtc_2 ($time, $zone, $isDaylightSavings)
	 * @uses TimeZoneInfoMethodsOverride::GetUtcOffsetFromUtc_3 ($time, $zone, $isDaylightSavings, $isAmbiguousLocalDst)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetUtcOffsetFromUtc(mixed ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\TransitionTime $transitionTime
	 * @return \System\DateTime
	 */
	protected static function TransitionTimeToDateTime($year, $transitionTime){}
	/**
	 * @param \System\String|string $id
	 * @param \System\Boolean $dstDisabled
	 * @param \System\TimeZoneInfo& $value
	 * @param \System\Exception& $e
	 * @param \System\CachedData $cachedData
	 * @param \System\Boolean $alwaysFallbackToLocalMachine
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetTimeZone($id, $dstDisabled, $value, $e, $cachedData, $alwaysFallbackToLocalMachine){}
	/**
	 * @param \System\String|string $id
	 * @param \System\Boolean $dstDisabled
	 * @param \System\TimeZoneInfo& $value
	 * @param \System\Exception& $e
	 * @param \System\CachedData $cachedData
	 * @param \System\Boolean $alwaysFallbackToLocalMachine
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetTimeZoneUsingId($id, $dstDisabled, $value, $e, $cachedData, $alwaysFallbackToLocalMachine){}
	/**
	 * @uses TimeZoneInfoMethodsOverride::TryGetTimeZoneFromLocalMachine_1 ($id, $dstDisabled, $value, $e, $cachedData)
	 * @uses TimeZoneInfoMethodsOverride::TryGetTimeZoneFromLocalMachine_2 ($id, $value, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryGetTimeZoneFromLocalMachine(mixed ...$args){}
	/**
	 * @param \System\String|string $id
	 * @param \System\TimeSpan $baseUtcOffset
	 * @param \System\AdjustmentRule[] $adjustmentRules
	 * @param \System\Boolean& $adjustmentRulesSupportDst
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateTimeZoneInfo($id, $baseUtcOffset, $adjustmentRules, $adjustmentRulesSupportDst){}
	/**
	 * @param \System\TimeSpan $offset
	 * @return \System\Boolean
	 */
	protected static function UtcOffsetOutOfRange($offset){}
	/**
	 * @param \System\TimeSpan $baseUtcOffset
	 * @param \System\AdjustmentRule $adjustmentRule
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsValidAdjustmentRuleOffset($baseUtcOffset, $adjustmentRule){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateUtcTimeZone(){}
	/**
	 * @return \System\AdjustmentRule[]
	 */
	public  function GetAdjustmentRules(){}
	/**
	 * @param \System\CachedData $cachedData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PopulateAllSystemTimeZones($cachedData){}
	/**
	 * @param \System\String|string $id
	 * @param \System\Boolean& $idIsIana
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAlternativeId($id, $idIsIana){}
	/**
	 * @param \\TIME_ZONE_INFORMATION& $timeZone
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckDaylightSavingTimeNotSupported($timeZone){}
	/**
	 * @param \\REG_TZI_FORMAT& $timeZoneInformation
	 * @param \System\DateTime $startDate
	 * @param \System\DateTime $endDate
	 * @param \System\Int32|int $defaultBaseUtcOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateAdjustmentRuleFromTimeZoneInformation($timeZoneInformation, $startDate, $endDate, $defaultBaseUtcOffset){}
	/**
	 * @param \\TIME_ZONE_INFORMATION& $timeZone
	 * @param \System\Boolean& $dstDisabled
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindIdFromTimeZoneInformation($timeZone, $dstDisabled){}
	/**
	 * @param \System\CachedData $cachedData
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLocalTimeZone($cachedData){}
	/**
	 * @param \\TIME_ZONE_INFORMATION& $timeZoneInformation
	 * @param \System\Boolean $dstDisabled
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLocalTimeZoneFromWin32Data($timeZoneInformation, $dstDisabled){}
	/**
	 * @param \System\String|string $id
	 * @return \System\TimeZoneInfo
	 */
	public static function FindSystemTimeZoneById($id){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Boolean& $isAmbiguousLocalDst
	 * @return \System\TimeSpan
	 */
	protected static function GetDateTimeNowUtcOffsetFromUtc($time, $isAmbiguousLocalDst){}
	/**
	 * @param \\REG_TZI_FORMAT& $timeZoneInformation
	 * @param \System\TransitionTime& $transitionTime
	 * @param \System\Boolean $readStartDate
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TransitionTimeFromTimeZoneInformation($timeZoneInformation, $transitionTime, $readStartDate){}
	/**
	 * @param \System\String|string $id
	 * @param \\REG_TZI_FORMAT& $defaultTimeZoneInformation
	 * @param \System\AdjustmentRule[]& $rules
	 * @param \System\Exception& $e
	 * @param \System\Int32|int $defaultBaseUtcOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCreateAdjustmentRules($id, $defaultTimeZoneInformation, $rules, $e, $defaultBaseUtcOffset){}
	/**
	 * @param \Internal\Win32\RegistryKey $key
	 * @param \System\String|string $name
	 * @param \\REG_TZI_FORMAT& $dtzi
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetTimeZoneEntryFromRegistry($key, $name, $dtzi){}
	/**
	 * @param \\TIME_ZONE_INFORMATION& $timeZone
	 * @param \\REG_TZI_FORMAT& $registryTimeZoneInfo
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCompareStandardDate($timeZone, $registryTimeZoneInfo){}
	/**
	 * @param \\TIME_ZONE_INFORMATION& $timeZone
	 * @param \System\String|string $id
	 * @param \System\Boolean& $dstDisabled
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCompareTimeZoneInformationToRegistry($timeZone, $id, $dstDisabled){}
	/**
	 * @param \System\String|string $resource
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLocalizedNameByMuiNativeResource($resource){}
	/**
	 * @param \System\String|string $filePath
	 * @param \System\Int32|int $resource
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLocalizedNameByNativeResource($filePath, $resource){}
	/**
	 * @param \Internal\Win32\RegistryKey $key
	 * @param \System\String& $displayName
	 * @param \System\String& $standardName
	 * @param \System\String& $daylightName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLocalizedNamesByRegistryKey($key, $displayName, $standardName, $daylightName){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUtcStandardDisplayName(){}
	/**
	 * @param \System\String|string $timeZoneId
	 * @param \System\String|string $standardDisplayName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUtcFullDisplayName($timeZoneId, $standardDisplayName){}
}
