<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait KeyFrameAnimationInstance_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Initialize_1($startedAt, $startingValue, $property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Initialize_2($property, $trackedObjects){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class KeyFrameAnimationInstance_1 extends \Avalonia\Rendering\Composition\Animations\AnimationInstanceBase implements 
	\Avalonia\Rendering\Composition\Animations\IAnimationInstance,
	\Avalonia\Rendering\Composition\Server\IServerClockItem
{
	/**
	 * @param \System\TimeSpan $elapsed
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $currentValue
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionEvaluationContext& $ctx
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EvaluateImpl($elapsed, $currentValue, $ctx){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionEvaluationContext& $ctx
	 * @param \Avalonia\Rendering\Composition\Animations\ServerKeyFrame_1 $f
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetKeyFrame($ctx, $f){}
	/**
	 * @uses KeyFrameAnimationInstance_1MethodsOverride::Initialize_1 ($startedAt, $startingValue, $property)
	 * @uses KeyFrameAnimationInstance_1MethodsOverride::Initialize_2 ($property, $trackedObjects)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Initialize(mixed ...$args){}
}
