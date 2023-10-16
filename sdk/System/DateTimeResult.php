<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DateTimeResultMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetBadFormatSpecifierFailure_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetBadFormatSpecifierFailure_2($failedFormatSpecifier){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetFailure_1($failure, $failureMessageID){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetFailure_2($failure, $failureMessageID, $failureMessageFormatArgument){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetFailure_3($failure, $failureMessageID, $failureMessageFormatArgument, $failureArgumentName){}
}
/**
 */
class DateTimeResult extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $Year;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $Month;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $Day;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $Hour;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $Minute;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $Second;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $fraction;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $era;
	/**
	 * @var \System\ParseFlags
	 * @field
	 */
	protected $flags;
	/**
	 * @var \System\TimeSpan
	 * @field
	 */
	protected $timeZoneOffset;
	/**
	 * @var \System\Globalization\Calendar
	 * @field
	 */
	protected $calendar;
	/**
	 * @var \System\DateTime
	 * @field
	 */
	protected $parsedDate;
	/**
	 * @var \System\ParseFailureKind
	 * @field
	 */
	protected $failure;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $failureMessageID;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $failureMessageFormatArgument;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $failureArgumentName;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	protected $originalDateTimeString;
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @field
	 */
	protected $failedFormatSpecifier;
	/**
	 * @param \System\ReadOnlySpan_1 $originalDateTimeString
	 * @return \System\Void|void
	 */
	protected  function Init($originalDateTimeString){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @return \System\Void|void
	 */
	protected  function SetDate($year, $month, $day){}
	/**
	 * @uses DateTimeResultMethodsOverride::SetBadFormatSpecifierFailure_1 ()
	 * @uses DateTimeResultMethodsOverride::SetBadFormatSpecifierFailure_2 ($failedFormatSpecifier)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetBadFormatSpecifierFailure(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SetBadDateTimeFailure(){}
	/**
	 * @uses DateTimeResultMethodsOverride::SetFailure_1 ($failure, $failureMessageID)
	 * @uses DateTimeResultMethodsOverride::SetFailure_2 ($failure, $failureMessageID, $failureMessageFormatArgument)
	 * @uses DateTimeResultMethodsOverride::SetFailure_3 ($failure, $failureMessageID, $failureMessageFormatArgument, $failureArgumentName)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetFailure(mixed ...$args){}
}
