<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TransitionTimeMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class TransitionTime extends \System\ValueType implements 
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $TimeOfDay;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Month;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Week;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Day;
	/**
	 * @var \System\DayOfWeek
	 * @property
	 */
	public readonly $DayOfWeek;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFixedDateRule;
	/**
	 * @return \System\DateTime
	 */
	public  function get_TimeOfDay(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Month(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Week(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Day(){}
	/**
	 * @return \System\DayOfWeek
	 */
	public  function get_DayOfWeek(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFixedDateRule(){}
	/**
	 * @uses TransitionTimeMethodsOverride::Equals_1 ($obj)
	 * @uses TransitionTimeMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\TransitionTime $t1
	 * @param \System\TransitionTime $t2
	 * @return \System\Boolean
	 */
	public static function op_Equality($t1, $t2){}
	/**
	 * @param \System\TransitionTime $t1
	 * @param \System\TransitionTime $t2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($t1, $t2){}
	/**
	 * @param \System\DateTime $timeOfDay
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @return \System\TransitionTime
	 */
	public static function CreateFixedDateRule($timeOfDay, $month, $day){}
	/**
	 * @param \System\DateTime $timeOfDay
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $week
	 * @param \System\DayOfWeek $dayOfWeek
	 * @return \System\TransitionTime
	 */
	public static function CreateFloatingDateRule($timeOfDay, $month, $week, $dayOfWeek){}
	/**
	 * @param \System\DateTime $timeOfDay
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $week
	 * @param \System\Int32|int $day
	 * @param \System\DayOfWeek $dayOfWeek
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateTransitionTime($timeOfDay, $month, $week, $day, $dayOfWeek){}
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
}
