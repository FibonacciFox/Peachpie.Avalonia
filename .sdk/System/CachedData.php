<?php
namespace System;
final class CachedData extends \System\Object
{

	/**
	 * @field
	 * @var \System\Collections\Generic\Dictionary_2[System\String,System\TimeZoneInfo]
	 */
	public $_systemTimeZones;
	/**
	 * @field
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\TimeZoneInfo]
	 */
	public $_readOnlySystemTimeZones;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $_allSystemTimeZonesRead;
	/**
	 * @property
	 * @var \System\TimeZoneInfo
	 * @since readonly
	 */
	public $Local;
	private function CreateLocal(){}
	/**
	 * @param \System\TimeZoneInfo $timeZone
	 * @return \System\DateTimeKind
	 */
	public function GetCorrespondingKind($timeZone){}
	/**
	 */
	public function __construct(){}
}