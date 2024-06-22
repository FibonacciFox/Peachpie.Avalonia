<?php
namespace System;
final class TransitionTime extends \System\ValueType implements
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{

	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $TimeOfDay;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Month;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Week;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Day;
	/**
	 * @property
	 * @var \System\DayOfWeek
	 * @since readonly
	 */
	public $DayOfWeek;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFixedDateRule;
	/**
	 * @param \System\TimeZoneInfo+TransitionTime $t1
	 * @param \System\TimeZoneInfo+TransitionTime $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($t1, $t2){}
	/**
	 * @param \System\TimeZoneInfo+TransitionTime $t1
	 * @param \System\TimeZoneInfo+TransitionTime $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($t1, $t2){}
	/**
	 * @param \System\DateTime $timeOfDay
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @return \System\TimeZoneInfo+TransitionTime
	 */
	public static function CreateFixedDateRule($timeOfDay, $month, $day){}
	/**
	 * @param \System\DateTime $timeOfDay
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $week
	 * @param \System\DayOfWeek $dayOfWeek
	 * @return \System\TimeZoneInfo+TransitionTime
	 */
	public static function CreateFloatingDateRule($timeOfDay, $month, $week, $dayOfWeek){}
	private static function ValidateTransitionTime($timeOfDay, $month, $week, $day, $dayOfWeek){}
	private function OnDeserialization($sender){}
	private function GetObjectData($info, $context){}
}