<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DateTimeResultOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetBadFormatSpecifierFailure_1 (){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $failedFormatSpecifier [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetBadFormatSpecifierFailure_2 ($failedFormatSpecifier){}
	/**
	 * @deprecated
	 * @param \System\ParseFailureKind $failure
	 * @param \System\String|string $failureMessageID
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetFailure_1 ($failure, $failureMessageID){}
	/**
	 * @deprecated
	 * @param \System\ParseFailureKind $failure
	 * @param \System\String|string $failureMessageID
	 * @param \System\Object|object $failureMessageFormatArgument
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetFailure_2 ($failure, $failureMessageID, $failureMessageFormatArgument){}
	/**
	 * @deprecated
	 * @param \System\ParseFailureKind $failure
	 * @param \System\String|string $failureMessageID
	 * @param \System\Object|object $failureMessageFormatArgument
	 * @param \System\String|string $failureArgumentName
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SetFailure_3 ($failure, $failureMessageID, $failureMessageFormatArgument, $failureArgumentName){}
}
final class DateTimeResult extends \System\ValueType
{
	use DateTimeResultOverride;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $Year;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $Month;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $Day;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $Hour;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $Minute;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $Second;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $fraction;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $era;
	/**
	 * @field
	 * @var \System\ParseFlags
	 */
	protected $flags;
	/**
	 * @field
	 * @var \System\TimeSpan
	 */
	protected $timeZoneOffset;
	/**
	 * @field
	 * @var \System\Globalization\Calendar
	 */
	protected $calendar;
	/**
	 * @field
	 * @var \System\DateTime
	 */
	protected $parsedDate;
	/**
	 * @field
	 * @var \System\ParseFailureKind
	 */
	protected $failure;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $failureMessageID;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	protected $failureMessageFormatArgument;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $failureArgumentName;
	/**
	 * @field
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	protected $originalDateTimeString;
	/**
	 * @field
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	protected $failedFormatSpecifier;
	/**
	 * @param \System\ReadOnlySpan_1 $originalDateTimeString [generic: System\Char]
	 * @return \System\Void|void
	 */
	protected function Init($originalDateTimeString){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @return \System\Void|void
	 */
	protected function SetDate($year, $month, $day){}
	/**
	 * @uses DateTimeResultOverride::SetBadFormatSpecifierFailure_1 <br>protected , args: ()<br>
	 * @uses DateTimeResultOverride::SetBadFormatSpecifierFailure_2 <br>protected , args: ($failedFormatSpecifier)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetBadFormatSpecifierFailure (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected function SetBadDateTimeFailure(){}
	/**
	 * @uses DateTimeResultOverride::SetFailure_1 <br>protected , args: ($failure, $failureMessageID)<br>
	 * @uses DateTimeResultOverride::SetFailure_2 <br>protected , args: ($failure, $failureMessageID, $failureMessageFormatArgument)<br>
	 * @uses DateTimeResultOverride::SetFailure_3 <br>protected , args: ($failure, $failureMessageID, $failureMessageFormatArgument, $failureArgumentName)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SetFailure (\override ...$args){}
}