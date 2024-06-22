<?php
namespace System;
final class CurrentSystemTimeZone extends \System\TimeZone
{

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
	 * @param \System\DateTime $time
	 * @param \System\Boolean& $isAmbiguousLocalDst
	 * @return \System\Int64|int
	 */
	protected function GetUtcOffsetFromUniversalTime($time, $isAmbiguousLocalDst){}
	private static function CreateDaylightChanges($year){}
	private function GetCachedDaylightChanges($year){}
}