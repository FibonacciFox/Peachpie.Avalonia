<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TimeZoneInfoOverride {
	/**
	 * @deprecated
	 * @param \System\DateTimeOffset $dateTimeOffset
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public function GetAmbiguousTimeOffsets_1 ($dateTimeOffset){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public function GetAmbiguousTimeOffsets_2 ($dateTime){}
	/**
	 * @deprecated
	 * @param \System\DateTimeOffset $dateTimeOffset
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public function GetUtcOffset_1 ($dateTimeOffset){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public function GetUtcOffset_2 ($dateTime){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfoOptions $flags
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]protected function GetUtcOffset_3 ($dateTime, $flags){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfoOptions $flags
	 * @param \System\TimeZoneInfo+CachedData $cachedData
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]private function GetUtcOffset_4 ($dateTime, $flags, $cachedData){}
	/**
	 * @deprecated
	 * @param \System\DateTime $time
	 * @param \System\TimeZoneInfo $zone
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]private static function GetUtcOffset_5 ($time, $zone){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $baseUtcOffset
	 * @param \System\TimeZoneInfo+AdjustmentRule $adjustmentRule
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]private static function GetUtcOffset_6 ($baseUtcOffset, $adjustmentRule){}
	/**
	 * @deprecated
	 * @param \System\DateTimeOffset $dateTimeOffset
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsAmbiguousTime_1 ($dateTimeOffset){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsAmbiguousTime_2 ($dateTime){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfoOptions $flags
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function IsAmbiguousTime_3 ($dateTime, $flags){}
	/**
	 * @deprecated
	 * @param \System\DateTimeOffset $dateTimeOffset
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsDaylightSavingTime_1 ($dateTimeOffset){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsDaylightSavingTime_2 ($dateTime){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfoOptions $flags
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function IsDaylightSavingTime_3 ($dateTime, $flags){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfoOptions $flags
	 * @param \System\TimeZoneInfo+CachedData $cachedData
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function IsDaylightSavingTime_4 ($dateTime, $flags, $cachedData){}
	/**
	 * @deprecated
	 * @param \System\DateTimeOffset $dateTimeOffset
	 * @param \System\String|string $destinationTimeZoneId
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function ConvertTimeBySystemTimeZoneId_1 ($dateTimeOffset, $destinationTimeZoneId){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\String|string $destinationTimeZoneId
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function ConvertTimeBySystemTimeZoneId_2 ($dateTime, $destinationTimeZoneId){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\String|string $sourceTimeZoneId
	 * @param \System\String|string $destinationTimeZoneId
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function ConvertTimeBySystemTimeZoneId_3 ($dateTime, $sourceTimeZoneId, $destinationTimeZoneId){}
	/**
	 * @deprecated
	 * @param \System\DateTimeOffset $dateTimeOffset
	 * @param \System\TimeZoneInfo $destinationTimeZone
	 * @return \System\DateTimeOffset
	 */
	#[MethodOverride]public static function ConvertTime_1 ($dateTimeOffset, $destinationTimeZone){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfo $destinationTimeZone
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function ConvertTime_2 ($dateTime, $destinationTimeZone){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfo $sourceTimeZone
	 * @param \System\TimeZoneInfo $destinationTimeZone
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function ConvertTime_3 ($dateTime, $sourceTimeZone, $destinationTimeZone){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfo $sourceTimeZone
	 * @param \System\TimeZoneInfo $destinationTimeZone
	 * @param \System\TimeZoneInfoOptions $flags
	 * @return \System\DateTime
	 */
	#[MethodOverride]protected static function ConvertTime_4 ($dateTime, $sourceTimeZone, $destinationTimeZone, $flags){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfo $sourceTimeZone
	 * @param \System\TimeZoneInfo $destinationTimeZone
	 * @param \System\TimeZoneInfoOptions $flags
	 * @param \System\TimeZoneInfo+CachedData $cachedData
	 * @return \System\DateTime
	 */
	#[MethodOverride]private static function ConvertTime_5 ($dateTime, $sourceTimeZone, $destinationTimeZone, $flags, $cachedData){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function ConvertTimeToUtc_1 ($dateTime){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfoOptions $flags
	 * @return \System\DateTime
	 */
	#[MethodOverride]protected static function ConvertTimeToUtc_2 ($dateTime, $flags){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfo $sourceTimeZone
	 * @return \System\DateTime
	 */
	#[MethodOverride]public static function ConvertTimeToUtc_3 ($dateTime, $sourceTimeZone){}
	/**
	 * @deprecated
	 * @param \System\String|string $id
	 * @param \System\TimeSpan $baseUtcOffset
	 * @param \System\String|string $displayName
	 * @param \System\String|string $standardDisplayName
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride]public static function CreateCustomTimeZone_1 ($id, $baseUtcOffset, $displayName, $standardDisplayName){}
	/**
	 * @deprecated
	 * @param \System\String|string $id
	 * @param \System\TimeSpan $baseUtcOffset
	 * @param \System\String|string $displayName
	 * @param \System\String|string $standardDisplayName
	 * @param \System\String|string $daylightDisplayName
	 * @param \System\TimeZoneInfo+AdjustmentRule $adjustmentRules
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride]public static function CreateCustomTimeZone_2 ($id, $baseUtcOffset, $displayName, $standardDisplayName, $daylightDisplayName, $adjustmentRules){}
	/**
	 * @deprecated
	 * @param \System\String|string $id
	 * @param \System\TimeSpan $baseUtcOffset
	 * @param \System\String|string $displayName
	 * @param \System\String|string $standardDisplayName
	 * @param \System\String|string $daylightDisplayName
	 * @param \System\TimeZoneInfo+AdjustmentRule $adjustmentRules
	 * @param \System\Boolean|bool $disableDaylightSavingTime
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride]public static function CreateCustomTimeZone_3 ($id, $baseUtcOffset, $displayName, $standardDisplayName, $daylightDisplayName, $adjustmentRules, $disableDaylightSavingTime){}
	/**
	 * @deprecated
	 * @param \System\String|string $ianaId
	 * @param \System\String& &$windowsId
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryConvertIanaIdToWindowsId_1 ($ianaId, &$windowsId){}
	/**
	 * @deprecated
	 * @param \System\String|string $ianaId
	 * @param \System\Boolean|bool $allocate
	 * @param \System\String& &$windowsId
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertIanaIdToWindowsId_2 ($ianaId, $allocate, &$windowsId){}
	/**
	 * @deprecated
	 * @param \System\String|string $windowsId
	 * @param \System\String& &$ianaId
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryConvertWindowsIdToIanaId_1 ($windowsId, &$ianaId){}
	/**
	 * @deprecated
	 * @param \System\String|string $windowsId
	 * @param \System\String|string $region
	 * @param \System\String& &$ianaId
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryConvertWindowsIdToIanaId_2 ($windowsId, $region, &$ianaId){}
	/**
	 * @deprecated
	 * @param \System\String|string $windowsId
	 * @param \System\String|string $region
	 * @param \System\Boolean|bool $allocate
	 * @param \System\String& &$ianaId
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryConvertWindowsIdToIanaId_3 ($windowsId, $region, $allocate, &$ianaId){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\Nullable_1 &$ruleIndex [generic: System\Int32]
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride]private function GetAdjustmentRuleForTime_1 ($dateTime, &$ruleIndex){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateTime
	 * @param \System\Boolean|bool $dateTimeisUtc
	 * @param \System\Nullable_1 &$ruleIndex [generic: System\Int32]
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride]private function GetAdjustmentRuleForTime_2 ($dateTime, $dateTimeisUtc, &$ruleIndex){}
	/**
	 * @deprecated
	 * @param \System\DateTime $time
	 * @param \System\TimeZoneInfo $zone
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]private static function GetUtcOffsetFromUtc_1 ($time, $zone){}
	/**
	 * @deprecated
	 * @param \System\DateTime $time
	 * @param \System\TimeZoneInfo $zone
	 * @param \System\Boolean& &$isDaylightSavings
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]private static function GetUtcOffsetFromUtc_2 ($time, $zone, &$isDaylightSavings){}
	/**
	 * @deprecated
	 * @param \System\DateTime $time
	 * @param \System\TimeZoneInfo $zone
	 * @param \System\Boolean& &$isDaylightSavings
	 * @param \System\Boolean& &$isAmbiguousLocalDst
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]protected static function GetUtcOffsetFromUtc_3 ($time, $zone, &$isDaylightSavings, &$isAmbiguousLocalDst){}
	/**
	 * @deprecated
	 * @param \System\String|string $id
	 * @param \System\Boolean|bool $dstDisabled
	 * @param \System\TimeZoneInfo& &$value
	 * @param \System\Exception& &$e
	 * @param \System\TimeZoneInfo+CachedData $cachedData
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride]private static function TryGetTimeZoneFromLocalMachine_1 ($id, $dstDisabled, &$value, &$e, $cachedData){}
	/**
	 * @deprecated
	 * @param \System\String|string $id
	 * @param \System\TimeZoneInfo& &$value
	 * @param \System\Exception& &$e
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride]private static function TryGetTimeZoneFromLocalMachine_2 ($id, &$value, &$e){}
}
final class TimeZoneInfo extends \System\Object implements
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	use TimeZoneInfoOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasIanaId;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DisplayName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $StandardName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DaylightName;
	/**
	 * @property
	 * @var \System\TimeSpan
	 * @since readonly
	 */
	public $BaseUtcOffset;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $SupportsDaylightSavingTime;
	/**
	 * @property
	 * @var \System\TimeZoneInfo
	 * @since readonly
	 */
	public $Local;
	/**
	 * @property
	 * @var \System\TimeZoneInfo
	 * @since readonly
	 */
	public $Utc;
	/**
	 * @uses TimeZoneInfoOverride::GetAmbiguousTimeOffsets_1 <br>public , args: ($dateTimeOffset)<br>
	 * @uses TimeZoneInfoOverride::GetAmbiguousTimeOffsets_2 <br>public , args: ($dateTime)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|mixed|\override
	 */
	#[MethodOverridePublic]function GetAmbiguousTimeOffsets (\override ...$args){}
	private function GetAdjustmentRuleForAmbiguousOffsets($adjustedTime, &$ruleIndex){}
	private function GetPreviousAdjustmentRule($rule, $ruleIndex){}
	/**
	 * @uses TimeZoneInfoOverride::GetUtcOffset_1 <br>public , args: ($dateTimeOffset)<br>
	 * @uses TimeZoneInfoOverride::GetUtcOffset_2 <br>public , args: ($dateTime)<br>
	 * @uses TimeZoneInfoOverride::GetUtcOffset_3 <br>protected , args: ($dateTime, $flags)<br>
	 * @uses TimeZoneInfoOverride::GetUtcOffset_4 <br>private , args: ($dateTime, $flags, $cachedData)<br>
	 * @uses TimeZoneInfoOverride::GetUtcOffset_5 <br>private , args: ($time, $zone)<br>
	 * @uses TimeZoneInfoOverride::GetUtcOffset_6 <br>private , args: ($baseUtcOffset, $adjustmentRule)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|mixed|\override
	 */
	#[MethodOverridePublic]function GetUtcOffset (\override ...$args){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfoOptions $flags
	 * @return \System\TimeSpan
	 */
	protected static function GetLocalUtcOffset($dateTime, $flags){}
	/**
	 * @uses TimeZoneInfoOverride::IsAmbiguousTime_1 <br>public , args: ($dateTimeOffset)<br>
	 * @uses TimeZoneInfoOverride::IsAmbiguousTime_2 <br>public , args: ($dateTime)<br>
	 * @uses TimeZoneInfoOverride::IsAmbiguousTime_3 <br>protected , args: ($dateTime, $flags)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsAmbiguousTime (\override ...$args){}
	/**
	 * @uses TimeZoneInfoOverride::IsDaylightSavingTime_1 <br>public , args: ($dateTimeOffset)<br>
	 * @uses TimeZoneInfoOverride::IsDaylightSavingTime_2 <br>public , args: ($dateTime)<br>
	 * @uses TimeZoneInfoOverride::IsDaylightSavingTime_3 <br>protected , args: ($dateTime, $flags)<br>
	 * @uses TimeZoneInfoOverride::IsDaylightSavingTime_4 <br>private , args: ($dateTime, $flags, $cachedData)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsDaylightSavingTime (\override ...$args){}
	/**
	 * @param \System\DateTime $dateTime
	 * @return \System\Boolean|bool
	 */
	public function IsInvalidTime($dateTime){}
	/**
	 * @return \System\Void|void
	 */
	public static function ClearCachedData(){}
	/**
	 * @uses TimeZoneInfoOverride::ConvertTimeBySystemTimeZoneId_1 <br>public , args: ($dateTimeOffset, $destinationTimeZoneId)<br>
	 * @uses TimeZoneInfoOverride::ConvertTimeBySystemTimeZoneId_2 <br>public , args: ($dateTime, $destinationTimeZoneId)<br>
	 * @uses TimeZoneInfoOverride::ConvertTimeBySystemTimeZoneId_3 <br>public , args: ($dateTime, $sourceTimeZoneId, $destinationTimeZoneId)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|\System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertTimeBySystemTimeZoneId (\override ...$args){}
	/**
	 * @uses TimeZoneInfoOverride::ConvertTime_1 <br>public , args: ($dateTimeOffset, $destinationTimeZone)<br>
	 * @uses TimeZoneInfoOverride::ConvertTime_2 <br>public , args: ($dateTime, $destinationTimeZone)<br>
	 * @uses TimeZoneInfoOverride::ConvertTime_3 <br>public , args: ($dateTime, $sourceTimeZone, $destinationTimeZone)<br>
	 * @uses TimeZoneInfoOverride::ConvertTime_4 <br>protected , args: ($dateTime, $sourceTimeZone, $destinationTimeZone, $flags)<br>
	 * @uses TimeZoneInfoOverride::ConvertTime_5 <br>private , args: ($dateTime, $sourceTimeZone, $destinationTimeZone, $flags, $cachedData)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTimeOffset|\System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertTime (\override ...$args){}
	/**
	 * @param \System\DateTime $dateTime
	 * @param \System\TimeZoneInfo $destinationTimeZone
	 * @return \System\DateTime
	 */
	public static function ConvertTimeFromUtc($dateTime, $destinationTimeZone){}
	/**
	 * @uses TimeZoneInfoOverride::ConvertTimeToUtc_1 <br>public , args: ($dateTime)<br>
	 * @uses TimeZoneInfoOverride::ConvertTimeToUtc_2 <br>protected , args: ($dateTime, $flags)<br>
	 * @uses TimeZoneInfoOverride::ConvertTimeToUtc_3 <br>public , args: ($dateTime, $sourceTimeZone)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertTimeToUtc (\override ...$args){}
	/**
	 * @param \System\String|string $source
	 * @return \System\TimeZoneInfo
	 */
	public static function FromSerializedString($source){}
	/**
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1[System\TimeZoneInfo]
	 */
	public static function GetSystemTimeZones(){}
	/**
	 * @param \System\TimeZoneInfo $other
	 * @return \System\Boolean|bool
	 */
	public function HasSameRules($other){}
	/**
	 * @return \System\String|string
	 */
	public function ToSerializedString(){}
	/**
	 * @uses TimeZoneInfoOverride::CreateCustomTimeZone_1 <br>public , args: ($id, $baseUtcOffset, $displayName, $standardDisplayName)<br>
	 * @uses TimeZoneInfoOverride::CreateCustomTimeZone_2 <br>public , args: ($id, $baseUtcOffset, $displayName, $standardDisplayName, $daylightDisplayName, $adjustmentRules)<br>
	 * @uses TimeZoneInfoOverride::CreateCustomTimeZone_3 <br>public , args: ($id, $baseUtcOffset, $displayName, $standardDisplayName, $daylightDisplayName, $adjustmentRules, $disableDaylightSavingTime)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeZoneInfo|mixed|\override
	 */
	#[MethodOverridePublic]function CreateCustomTimeZone (\override ...$args){}
	/**
	 * @uses TimeZoneInfoOverride::TryConvertIanaIdToWindowsId_1 <br>public , args: ($ianaId, &$windowsId)<br>
	 * @uses TimeZoneInfoOverride::TryConvertIanaIdToWindowsId_2 <br>private , args: ($ianaId, $allocate, &$windowsId)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryConvertIanaIdToWindowsId (\override ...$args){}
	/**
	 * @uses TimeZoneInfoOverride::TryConvertWindowsIdToIanaId_1 <br>public , args: ($windowsId, &$ianaId)<br>
	 * @uses TimeZoneInfoOverride::TryConvertWindowsIdToIanaId_2 <br>public , args: ($windowsId, $region, &$ianaId)<br>
	 * @uses TimeZoneInfoOverride::TryConvertWindowsIdToIanaId_3 <br>private , args: ($windowsId, $region, $allocate, &$ianaId)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryConvertWindowsIdToIanaId (\override ...$args){}
	private function OnDeserialization($sender){}
	private function GetObjectData($info, $context){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TimeZoneInfoOverride::GetAdjustmentRuleForTime_1 <br>private , args: ($dateTime, &$ruleIndex)<br>
	 * @uses TimeZoneInfoOverride::GetAdjustmentRuleForTime_2 <br>private , args: ($dateTime, $dateTimeisUtc, &$ruleIndex)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeZoneInfo|mixed|\override
	 */
	#[MethodOverridePrivate]function GetAdjustmentRuleForTime (\override ...$args){}
	private function CompareAdjustmentRuleToDateTime($rule, $previousRule, $dateTime, $dateOnly, $dateTimeisUtc){}
	private function ConvertToUtc($dateTime, $daylightDelta, $baseUtcOffsetDelta){}
	private function ConvertFromUtc($dateTime, $daylightDelta, $baseUtcOffsetDelta){}
	private function ConvertToFromUtc($dateTime, $daylightDelta, $baseUtcOffsetDelta, $convertToUtc){}
	private static function ConvertUtcToTimeZone($ticks, $destinationTimeZone, &$isAmbiguousLocalDst){}
	private function GetDaylightTime($year, $rule, $ruleIndex){}
	private static function GetIsDaylightSavings($time, $rule, $daylightTime){}
	private function GetDaylightSavingsStartOffsetFromUtc($baseUtcOffset, $rule, $ruleIndex){}
	private static function GetDaylightSavingsEndOffsetFromUtc($baseUtcOffset, $rule){}
	private static function GetIsDaylightSavingsFromUtc($time, $year, $utc, $rule, $ruleIndex, &$isAmbiguousLocalDst, $zone){}
	private static function TryGetEndOfDstIfYearStartWithDst($nextYear, $utc, $zone, &$dstEnd){}
	private static function TryGetStartOfDstIfYearEndWithDst($previousYear, $utc, $zone, &$dstStart){}
	private static function CheckIsDst($startTime, $time, $endTime, $ignoreYearAdjustment, $rule){}
	private static function GetIsAmbiguousTime($time, $rule, $daylightTime){}
	private static function GetIsInvalidTime($time, $rule, $daylightTime){}
	/**
	 * @uses TimeZoneInfoOverride::GetUtcOffsetFromUtc_1 <br>private , args: ($time, $zone)<br>
	 * @uses TimeZoneInfoOverride::GetUtcOffsetFromUtc_2 <br>private , args: ($time, $zone, &$isDaylightSavings)<br>
	 * @uses TimeZoneInfoOverride::GetUtcOffsetFromUtc_3 <br>protected , args: ($time, $zone, &$isDaylightSavings, &$isAmbiguousLocalDst)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|mixed|\override
	 */
	#[MethodOverrideProtected]function GetUtcOffsetFromUtc (\override ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\TimeZoneInfo+TransitionTime $transitionTime
	 * @return \System\DateTime
	 */
	protected static function TransitionTimeToDateTime($year, $transitionTime){}
	private static function TryGetTimeZone($id, $dstDisabled, &$value, &$e, $cachedData, $alwaysFallbackToLocalMachine){}
	private static function TryGetTimeZoneUsingId($id, $dstDisabled, &$value, &$e, $cachedData, $alwaysFallbackToLocalMachine){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TimeZoneInfoOverride::TryGetTimeZoneFromLocalMachine_1 <br>private , args: ($id, $dstDisabled, &$value, &$e, $cachedData)<br>
	 * @uses TimeZoneInfoOverride::TryGetTimeZoneFromLocalMachine_2 <br>private , args: ($id, &$value, &$e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeZoneInfo|mixed|\override
	 */
	#[MethodOverridePrivate]function TryGetTimeZoneFromLocalMachine (\override ...$args){}
	private static function ValidateTimeZoneInfo($id, $baseUtcOffset, $adjustmentRules, &$adjustmentRulesSupportDst){}
	/**
	 * @param \System\TimeSpan $offset
	 * @return \System\Boolean|bool
	 */
	protected static function UtcOffsetOutOfRange($offset){}
	private static function IsValidAdjustmentRuleOffset($baseUtcOffset, $adjustmentRule){}
	private static function CreateUtcTimeZone(){}
	private static function GetTimeOnlyInMillisecondsPrecision($input){}
	/**
	 * @return \System\TimeZoneInfo+AdjustmentRule[]
	 */
	public function GetAdjustmentRules(){}
	private static function PopulateAllSystemTimeZones($cachedData){}
	private static function GetLocalTimeZone($cachedData){}
	private static function GetTimeZoneFromTzData($rawData, $id){}
	/**
	 * @param \System\String|string $id
	 * @return \System\TimeZoneInfo
	 */
	public static function FindSystemTimeZoneById($id){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Boolean& &$isAmbiguousLocalDst
	 * @return \System\TimeSpan
	 */
	protected static function GetDateTimeNowUtcOffsetFromUtc($time, &$isAmbiguousLocalDst){}
	private static function TZif_GenerateAdjustmentRules(&$rules, $baseUtcOffset, $dts, $typeOfLocalTime, $transitionType, $futureTransitionsPosixFormat){}
	private static function TZif_GenerateAdjustmentRule($index, $timeZoneBaseUtcOffset, $rulesList, $dts, $typeOfLocalTime, $transitionTypes, $futureTransitionsPosixFormat){}
	private static function TZif_CalculateTransitionOffsetFromBase($transitionOffset, $timeZoneBaseUtcOffset){}
	private static function TZif_GetEarlyDateTransitionType($transitionTypes){}
	private static function TZif_CreateAdjustmentRuleForPosixFormat($posixFormat, $startTransitionDate, $timeZoneBaseUtcOffset){}
	private static function TZif_ParseOffsetString($offset){}
	private static function ParseTimeOfDay($time){}
	private static function TZif_CreateTransitionTimeFromPosixRule($date, $time){}
	private static function TZif_ParseJulianDay($date, &$month, &$day){}
	private static function TZif_ParseMDateRule($dateRule, &$month, &$week, &$dayOfWeek){}
	private static function TZif_ParsePosixFormat($posixFormat, &$standardName, &$standardOffset, &$daylightSavingsName, &$daylightSavingsOffset, &$start, &$startTime, &$end, &$endTime){}
	private static function TZif_ParsePosixName($posixFormat, $index){}
	private static function TZif_ParsePosixOffset($posixFormat, $index){}
	private static function TZif_ParsePosixDateTime($posixFormat, $index, &$date, &$time){}
	private static function TZif_ParsePosixDate($posixFormat, $index){}
	private static function TZif_ParsePosixTime($posixFormat, $index){}
	private static function TZif_ParsePosixString($posixFormat, $index, $breakCondition){}
	private static function TZif_GetZoneAbbreviation($zoneAbbreviations, $index){}
	private static function TZif_ToInt32($value, $startIndex){}
	private static function TZif_ToInt64($value, $startIndex){}
	private static function TZif_ToUnixTime($value, $startIndex, $version){}
	private static function TZif_UnixTimeToDateTime($unixTime){}
	private static function TZif_ParseRaw($data, &$t, &$dts, &$typeOfLocalTime, &$transitionType, &$zoneAbbreviations, &$futureTransitionsPosixFormat){}
	private static function NormalizeAdjustmentRuleOffset($baseUtcOffset, $adjustmentRule){}
	private static function StringArrayContains($value, $source, $comparison){}
	private static function GetLocalTimeZoneCore(){}
	private static function ReadAllBytesFromSeekableNonZeroSizeFile($path, $maxFileSize){}
	private static function IdContainsAnyDisallowedChars($zoneId){}
	private static function TryGetTimeZoneFromLocalMachineCore($id, &$value, &$e){}
	private static function GetTimeZoneIds(){}
	private static function GetTzEnvironmentVariable(){}
	private static function FindTimeZoneIdUsingReadLink($tzFilePath){}
	private static function GetDirectoryEntryFullPath($dirent, $currentPath){}
	private static function EnumerateFilesRecursively($path, $condition){}
	private static function CompareTimeZoneFile($filePath, $buffer, $rawData){}
	private static function FindTimeZoneId($rawData){}
	private static function TryLoadTzFile($tzFilePath, $rawData, $id){}
	private static function TryGetLocalTzFile(&$rawData, &$id){}
	private static function GetLocalTimeZoneFromTzFile(){}
	private static function GetTimeZoneDirectory(){}
	private static function TryPopulateTimeZoneDisplayNamesFromGlobalizationData($timeZoneId, $baseUtcOffset, $standardDisplayName, $daylightDisplayName, $displayName){}
	private static function GetUtcStandardDisplayName(){}
	private static function GetUtcFullDisplayName($timeZoneId, $standardDisplayName){}
	private static function GetDisplayName($timeZoneId, $nameType, $uiCulture, $displayName){}
	private static function GetFullValueForDisplayNameField($timeZoneId, $baseUtcOffset, $uiCulture, $displayName){}
	private static function GetExemplarCityName($timeZoneId, $uiCultureName){}
	private static function GetAlternativeId($id, &$idIsIana){}
}