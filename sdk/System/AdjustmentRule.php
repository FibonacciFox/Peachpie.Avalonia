<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AdjustmentRuleMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\AdjustmentRule
	 */
	#[MethodOverride] public static function CreateAdjustmentRule_1($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd, $baseUtcOffsetDelta){}
	/**
	 * @return \System\AdjustmentRule
	 */
	#[MethodOverride] public static function CreateAdjustmentRule_2($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd){}
	/**
	 * @return \System\AdjustmentRule
	 */
	#[MethodOverride] protected static function CreateAdjustmentRule_3($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd, $baseUtcOffsetDelta, $noDaylightTransitions){}
}
/**
 */
class AdjustmentRule extends \System\Object implements 
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $DateStart;
	/**
	 * @var \System\DateTime
	 * @property
	 */
	public readonly $DateEnd;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public readonly $DaylightDelta;
	/**
	 * @var \System\TimeZoneInfo+TransitionTime
	 * @property
	 */
	public readonly $DaylightTransitionStart;
	/**
	 * @var \System\TimeZoneInfo+TransitionTime
	 * @property
	 */
	public readonly $DaylightTransitionEnd;
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public readonly $BaseUtcOffsetDelta;
	/**
	 * @return \System\DateTime
	 */
	public  function get_DateStart(){}
	/**
	 * @return \System\DateTime
	 */
	public  function get_DateEnd(){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_DaylightDelta(){}
	/**
	 * @return \System\TransitionTime
	 */
	public  function get_DaylightTransitionStart(){}
	/**
	 * @return \System\TransitionTime
	 */
	public  function get_DaylightTransitionEnd(){}
	/**
	 * @return \System\TimeSpan
	 */
	public  function get_BaseUtcOffsetDelta(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_NoDaylightTransitions(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasDaylightSaving(){}
	/**
	 * @uses AdjustmentRuleMethodsOverride::Equals_1 ($other)
	 * @uses AdjustmentRuleMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses AdjustmentRuleMethodsOverride::CreateAdjustmentRule_1 ($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd, $baseUtcOffsetDelta)
	 * @uses AdjustmentRuleMethodsOverride::CreateAdjustmentRule_2 ($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd)
	 * @uses AdjustmentRuleMethodsOverride::CreateAdjustmentRule_3 ($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd, $baseUtcOffsetDelta, $noDaylightTransitions)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateAdjustmentRule(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsStartDateMarkerForBeginningOfYear(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsEndDateMarkerForEndOfYear(){}
	/**
	 * @param \System\DateTime $dateStart
	 * @param \System\DateTime $dateEnd
	 * @param \System\TimeSpan $daylightDelta
	 * @param \System\TransitionTime $daylightTransitionStart
	 * @param \System\TransitionTime $daylightTransitionEnd
	 * @param \System\Boolean $noDaylightTransitions
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateAdjustmentRule($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd, $noDaylightTransitions){}
	/**
	 * @param \System\TimeSpan& $daylightDelta
	 * @param \System\TimeSpan& $baseUtcOffsetDelta
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AdjustDaylightDeltaToExpectedRange($daylightDelta, $baseUtcOffsetDelta){}
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
