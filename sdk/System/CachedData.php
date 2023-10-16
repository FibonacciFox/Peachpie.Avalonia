<?php
namespace System;
/**
 */
class CachedData extends \System\Object
{
	/**
	 * @var \System\Collections\Generic\Dictionary_2[System\String,System\TimeZoneInfo]
	 * @field
	 */
	public $_systemTimeZones;
	/**
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\TimeZoneInfo]
	 * @field
	 */
	public $_readOnlySystemTimeZones;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $_allSystemTimeZonesRead;
	/**
	 * @var \System\TimeZoneInfo
	 * @property
	 */
	public readonly $Local;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateLocal(){}
	/**
	 * @return \System\TimeZoneInfo
	 */
	public  function get_Local(){}
	/**
	 * @param \System\TimeZoneInfo $timeZone
	 * @return \System\DateTimeKind
	 */
	public  function GetCorrespondingKind($timeZone){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCurrentOneYearLocal(){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\OffsetAndRule
	 */
	public  function GetOneYearLocalFromUtc($year){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
