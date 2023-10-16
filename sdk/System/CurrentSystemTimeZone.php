<?php
namespace System;
/**
 */
class CurrentSystemTimeZone extends \System\TimeZone
{
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
	 * @param \System\DateTime $time
	 * @param \System\Boolean& $isAmbiguousLocalDst
	 * @return \System\Int64|int
	 */
	protected  function GetUtcOffsetFromUniversalTime($time, $isAmbiguousLocalDst){}
	/**
	 * @param \System\Int32|int $year
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDaylightChanges($year){}
	/**
	 * @param \System\Int32|int $year
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCachedDaylightChanges($year){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Boolean
	 */
	public  function IsDaylightSavingTime($time){}
}
