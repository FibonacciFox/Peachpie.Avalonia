<?php
namespace Avalonia\Rendering\Composition\Animations;
class KeyFrameAnimationInstance_1 extends \Avalonia\Rendering\Composition\Animations\AnimationInstanceBase implements
	\Avalonia\Rendering\Composition\Animations\IAnimationInstance,
	\Avalonia\Rendering\Composition\Server\IServerClockItem
{

	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerObject
	 * @since readonly
	 */
	public $TargetObject;
	private function EvaluateImpl($elapsed, $currentValue, $ctx){}
	private static function GetKeyFrame($ctx, $f){}
	/**
	 * @param \Avalonia\Rendering\Composition\Animations\IInterpolator_1 $interpolator [generic: T]
	 * @param \Avalonia\Rendering\Composition\Animations\ServerKeyFrame_1 $keyFrames [generic: T]
	 * @param \Avalonia\Rendering\Composition\Animations\PropertySetSnapshot $snapshot
	 * @param \System\Nullable_1 $finalValue [generic: Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @param \Avalonia\Rendering\Composition\Server\ServerObject $target
	 * @param \Avalonia\Rendering\Composition\Animations\AnimationDelayBehavior $delayBehavior
	 * @param \System\TimeSpan $delayTime
	 * @param \Avalonia\Animation\PlaybackDirection $direction
	 * @param \System\TimeSpan $duration
	 * @param \Avalonia\Rendering\Composition\Animations\AnimationIterationBehavior $iterationBehavior
	 * @param \System\Int32|int $iterationCount
	 * @param \Avalonia\Rendering\Composition\Animations\AnimationStopBehavior $stopBehavior
	 */
	public function __construct($interpolator, $keyFrames, $snapshot, $finalValue, $target, $delayBehavior, $delayTime, $direction, $duration, $iterationBehavior, $iterationCount, $stopBehavior){}
}