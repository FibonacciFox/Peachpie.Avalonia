<?php

/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GlobalizationOverride {
	/**
	 * @deprecated
	 * @param \System\IntPtr $callback
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @param \System\Globalization\CalendarDataType $calendarDataType
	 * @param \System\IntPtr $context
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function EnumCalendarInfo_1 ($callback, $localeName, $calendarId, $calendarDataType, $context){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $callback
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @param \System\Globalization\CalendarDataType $calendarDataType
	 * @param \System\IntPtr $context
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function EnumCalendarInfo_2 ($callback, $localeName, $calendarId, $calendarDataType, $context){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $icuuc
	 * @param \System\IntPtr $icuin
	 * @param \System\ReadOnlySpan_1 $version [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $suffix [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function InitICUFunctions_1 ($icuuc, $icuin, $version, $suffix){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $icuuc
	 * @param \System\IntPtr $icuin
	 * @param \System\String|string $version
	 * @param \System\String|string $suffix
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function InitICUFunctions_2 ($icuuc, $icuin, $version, $suffix){}
}
class Globalization extends \System\Object
{
	use GlobalizationOverride;


	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendars
	 * @param \System\Int32|int $calendarsCapacity
	 * @return \System\Int32|int
	 */
	protected static function GetCalendars($localeName, $calendars, $calendarsCapacity){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Globalization\CalendarId $calendarId
	 * @param \System\Globalization\CalendarDataType $calendarDataType
	 * @param \System\Char* $result
	 * @param \System\Int32|int $resultCapacity
	 * @return \Interop+Globalization+ResultCode
	 */
	protected static function GetCalendarInfo($localeName, $calendarId, $calendarDataType, $result, $resultCapacity){}
	/**
	 * @uses GlobalizationOverride::EnumCalendarInfo_1 <br>protected , args: ($callback, $localeName, $calendarId, $calendarDataType, $context)<br>
	 * @uses GlobalizationOverride::EnumCalendarInfo_2 <br>private , args: ($callback, $localeName, $calendarId, $calendarDataType, $context)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function EnumCalendarInfo (\override ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetLatestJapaneseEra(){}
	/**
	 * @param \System\Int32|int $era
	 * @param \System\Int32& &$startYear
	 * @param \System\Int32& &$startMonth
	 * @param \System\Int32& &$startDay
	 * @return \System\Boolean|bool
	 */
	protected static function GetJapaneseEraStartDate($era, &$startYear, &$startMonth, &$startDay){}
	/**
	 * @param \System\Char* $src
	 * @param \System\Int32|int $srcLen
	 * @param \System\Char* $dstBuffer
	 * @param \System\Int32|int $dstBufferCapacity
	 * @param \System\Boolean|bool $bToUpper
	 * @return \System\Void|void
	 */
	protected static function ChangeCase($src, $srcLen, $dstBuffer, $dstBufferCapacity, $bToUpper){}
	/**
	 * @param \System\Char* $src
	 * @param \System\Int32|int $srcLen
	 * @param \System\Char* $dstBuffer
	 * @param \System\Int32|int $dstBufferCapacity
	 * @param \System\Boolean|bool $bToUpper
	 * @return \System\Void|void
	 */
	protected static function ChangeCaseInvariant($src, $srcLen, $dstBuffer, $dstBufferCapacity, $bToUpper){}
	/**
	 * @param \System\Char* $src
	 * @param \System\Int32|int $srcLen
	 * @param \System\Char* $dstBuffer
	 * @param \System\Int32|int $dstBufferCapacity
	 * @param \System\Boolean|bool $bToUpper
	 * @return \System\Void|void
	 */
	protected static function ChangeCaseTurkish($src, $srcLen, $dstBuffer, $dstBufferCapacity, $bToUpper){}
	/**
	 * @param \System\Int32|int $pageNumber
	 * @param \System\Char* $pTarget
	 * @return \System\Void|void
	 */
	protected static function InitOrdinalCasingPage($pageNumber, $pTarget){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\IntPtr& &$sortHandle
	 * @return \Interop+Globalization+ResultCode
	 */
	protected static function GetSortHandle($localeName, &$sortHandle){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Void|void
	 */
	protected static function CloseSortHandle($handle){}
	/**
	 * @param \System\IntPtr $sortHandle
	 * @param \System\Char* $lpStr1
	 * @param \System\Int32|int $cwStr1Len
	 * @param \System\Char* $lpStr2
	 * @param \System\Int32|int $cwStr2Len
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	protected static function CompareString($sortHandle, $lpStr1, $cwStr1Len, $lpStr2, $cwStr2Len, $options){}
	/**
	 * @param \System\IntPtr $sortHandle
	 * @param \System\Char* $target
	 * @param \System\Int32|int $cwTargetLength
	 * @param \System\Char* $pSource
	 * @param \System\Int32|int $cwSourceLength
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @return \System\Int32|int
	 */
	protected static function IndexOf($sortHandle, $target, $cwTargetLength, $pSource, $cwSourceLength, $options, $matchLengthPtr){}
	/**
	 * @param \System\IntPtr $sortHandle
	 * @param \System\Char* $target
	 * @param \System\Int32|int $cwTargetLength
	 * @param \System\Char* $pSource
	 * @param \System\Int32|int $cwSourceLength
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @return \System\Int32|int
	 */
	protected static function LastIndexOf($sortHandle, $target, $cwTargetLength, $pSource, $cwSourceLength, $options, $matchLengthPtr){}
	/**
	 * @param \System\IntPtr $sortHandle
	 * @param \System\Char* $target
	 * @param \System\Int32|int $cwTargetLength
	 * @param \System\Char* $source
	 * @param \System\Int32|int $cwSourceLength
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchedLength
	 * @return \System\Boolean|bool
	 */
	protected static function StartsWith($sortHandle, $target, $cwTargetLength, $source, $cwSourceLength, $options, $matchedLength){}
	/**
	 * @param \System\IntPtr $sortHandle
	 * @param \System\Char* $target
	 * @param \System\Int32|int $cwTargetLength
	 * @param \System\Char* $source
	 * @param \System\Int32|int $cwSourceLength
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchedLength
	 * @return \System\Boolean|bool
	 */
	protected static function EndsWith($sortHandle, $target, $cwTargetLength, $source, $cwSourceLength, $options, $matchedLength){}
	/**
	 * @param \System\IntPtr $sortHandle
	 * @param \System\Char* $str
	 * @param \System\Int32|int $strLength
	 * @param \System\Byte* $sortKey
	 * @param \System\Int32|int $sortKeyLength
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	protected static function GetSortKey($sortHandle, $str, $strLength, $sortKey, $sortKeyLength, $options){}
	/**
	 * @param \System\IntPtr $sortHandle
	 * @return \System\Int32|int
	 */
	protected static function GetSortVersion($sortHandle){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function LoadICU(){}
	/**
	 * @uses GlobalizationOverride::InitICUFunctions_1 <br>protected , args: ($icuuc, $icuin, $version, $suffix)<br>
	 * @uses GlobalizationOverride::InitICUFunctions_2 <br>protected , args: ($icuuc, $icuin, $version, $suffix)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function InitICUFunctions (\override ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetICUVersion(){}
	/**
	 * @param \System\UInt32 $flags
	 * @param \System\Char* $src
	 * @param \System\Int32|int $srcLen
	 * @param \System\Char* $dstBuffer
	 * @param \System\Int32|int $dstBufferCapacity
	 * @return \System\Int32|int
	 */
	protected static function ToAscii($flags, $src, $srcLen, $dstBuffer, $dstBufferCapacity){}
	/**
	 * @param \System\UInt32 $flags
	 * @param \System\Char* $src
	 * @param \System\Int32|int $srcLen
	 * @param \System\Char* $dstBuffer
	 * @param \System\Int32|int $dstBufferCapacity
	 * @return \System\Int32|int
	 */
	protected static function ToUnicode($flags, $src, $srcLen, $dstBuffer, $dstBufferCapacity){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Char* $value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Boolean|bool
	 */
	protected static function GetLocaleName($localeName, $value, $valueLength){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\UInt32 $localeStringData
	 * @param \System\Char* $value
	 * @param \System\Int32|int $valueLength
	 * @param \System\String|string $uiLocaleName
	 * @return \System\Boolean|bool
	 */
	protected static function GetLocaleInfoString($localeName, $localeStringData, $value, $valueLength, $uiLocaleName){}
	/**
	 * @param \System\Char* $value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Boolean|bool
	 */
	protected static function GetDefaultLocaleName($value, $valueLength){}
	/**
	 * @param \System\String|string $localeName
	 * @return \System\Boolean|bool
	 */
	protected static function IsPredefinedLocale($localeName){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\Boolean|bool $shortFormat
	 * @param \System\Char* $value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Boolean|bool
	 */
	protected static function GetLocaleTimeFormat($localeName, $shortFormat, $value, $valueLength){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\UInt32 $localeNumberData
	 * @param \System\Int32& $value
	 * @return \System\Boolean|bool
	 */
	protected static function GetLocaleInfoInt($localeName, $localeNumberData, $value){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\UInt32 $localeGroupingData
	 * @param \System\Int32& $primaryGroupSize
	 * @param \System\Int32& $secondaryGroupSize
	 * @return \System\Boolean|bool
	 */
	protected static function GetLocaleInfoGroupingSizes($localeName, $localeGroupingData, $primaryGroupSize, $secondaryGroupSize){}
	/**
	 * @param \System\Char &$value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Int32|int
	 */
	protected static function GetLocales(&$value, $valueLength){}
	/**
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @param \System\Char* $src
	 * @param \System\Int32|int $srcLen
	 * @return \System\Int32|int
	 */
	protected static function IsNormalized($normalizationForm, $src, $srcLen){}
	/**
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @param \System\Char* $src
	 * @param \System\Int32|int $srcLen
	 * @param \System\Char* $dstBuffer
	 * @param \System\Int32|int $dstBufferCapacity
	 * @return \System\Int32|int
	 */
	protected static function NormalizeString($normalizationForm, $src, $srcLen, $dstBuffer, $dstBufferCapacity){}
	/**
	 * @param \System\String|string $localeName
	 * @param \System\String|string $timeZoneId
	 * @param \Interop+Globalization+TimeZoneDisplayNameType $type
	 * @param \System\Char* $result
	 * @param \System\Int32|int $resultLength
	 * @return \Interop+Globalization+ResultCode
	 */
	protected static function GetTimeZoneDisplayName($localeName, $timeZoneId, $type, $result, $resultLength){}
	/**
	 * @param \System\String|string $windowsId
	 * @param \System\IntPtr $region
	 * @param \System\Char* $ianaId
	 * @param \System\Int32|int $ianaIdLength
	 * @return \System\Int32|int
	 */
	protected static function WindowsIdToIanaId($windowsId, $region, $ianaId, $ianaIdLength){}
	/**
	 * @param \System\String|string $ianaId
	 * @param \System\Char* $windowsId
	 * @param \System\Int32|int $windowsIdLength
	 * @return \System\Int32|int
	 */
	protected static function IanaIdToWindowsId($ianaId, $windowsId, $windowsIdLength){}
}