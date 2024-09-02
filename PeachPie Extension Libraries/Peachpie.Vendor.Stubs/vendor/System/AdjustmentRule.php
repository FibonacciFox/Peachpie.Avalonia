<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AdjustmentRuleOverride {
	/**
	 * @deprecated
	 * @param \System\DateTime $dateStart
	 * @param \System\DateTime $dateEnd
	 * @param \System\TimeSpan $daylightDelta
	 * @param \System\TimeZoneInfo+TransitionTime $daylightTransitionStart
	 * @param \System\TimeZoneInfo+TransitionTime $daylightTransitionEnd
	 * @param \System\TimeSpan $baseUtcOffsetDelta
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride]public static function CreateAdjustmentRule_1 ($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd, $baseUtcOffsetDelta){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateStart
	 * @param \System\DateTime $dateEnd
	 * @param \System\TimeSpan $daylightDelta
	 * @param \System\TimeZoneInfo+TransitionTime $daylightTransitionStart
	 * @param \System\TimeZoneInfo+TransitionTime $daylightTransitionEnd
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride]public static function CreateAdjustmentRule_2 ($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd){}
	/**
	 * @deprecated
	 * @param \System\DateTime $dateStart
	 * @param \System\DateTime $dateEnd
	 * @param \System\TimeSpan $daylightDelta
	 * @param \System\TimeZoneInfo+TransitionTime $daylightTransitionStart
	 * @param \System\TimeZoneInfo+TransitionTime $daylightTransitionEnd
	 * @param \System\TimeSpan $baseUtcOffsetDelta
	 * @param \System\Boolean|bool $noDaylightTransitions
	 * @return \System\TimeZoneInfo
	 */
	#[MethodOverride]protected static function CreateAdjustmentRule_3 ($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd, $baseUtcOffsetDelta, $noDaylightTransitions){}
}
final class AdjustmentRule extends \System\Object implements
	\System\IEquatable_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	use AdjustmentRuleOverride;
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $DateStart;
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $DateEnd;
	/**
	 * @property
	 * @var \System\TimeSpan
	 * @since readonly
	 */
	public $DaylightDelta;
	/**
	 * @property
	 * @var \System\TimeZoneInfo+TransitionTime
	 * @since readonly
	 */
	public $DaylightTransitionStart;
	/**
	 * @property
	 * @var \System\TimeZoneInfo+TransitionTime
	 * @since readonly
	 */
	public $DaylightTransitionEnd;
	/**
	 * @property
	 * @var \System\TimeSpan
	 * @since readonly
	 */
	public $BaseUtcOffsetDelta;
	/**
	 * @uses AdjustmentRuleOverride::CreateAdjustmentRule_1 <br>public , args: ($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd, $baseUtcOffsetDelta)<br>
	 * @uses AdjustmentRuleOverride::CreateAdjustmentRule_2 <br>public , args: ($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd)<br>
	 * @uses AdjustmentRuleOverride::CreateAdjustmentRule_3 <br>protected , args: ($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd, $baseUtcOffsetDelta, $noDaylightTransitions)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeZoneInfo|mixed|\override
	 */
	#[MethodOverridePublic]function CreateAdjustmentRule (\override ...$args){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsStartDateMarkerForBeginningOfYear(){}
	/**
	 * @return \System\Boolean|bool
	 */
	protected function IsEndDateMarkerForEndOfYear(){}
	private static function ValidateAdjustmentRule($dateStart, $dateEnd, $daylightDelta, $daylightTransitionStart, $daylightTransitionEnd, $noDaylightTransitions){}
	private static function AdjustDaylightDeltaToExpectedRange($daylightDelta, $baseUtcOffsetDelta){}
	private function OnDeserialization($sender){}
	private function GetObjectData($info, $context){}
}