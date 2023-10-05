<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExpressionAnimationInstanceMethodsOverride
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
 */
class ExpressionAnimationInstance extends \Avalonia\Rendering\Composition\Animations\AnimationInstanceBase implements 
	\Avalonia\Rendering\Composition\Animations\IAnimationInstance,
	\Avalonia\Rendering\Composition\Server\IServerClockItem
{
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerObject
	 * @property
	 */
	public readonly $TargetObject;
	/**
	 * @uses ExpressionAnimationInstanceMethodsOverride::Initialize_1 ($startedAt, $startingValue, $property)
	 * @uses ExpressionAnimationInstanceMethodsOverride::Initialize_2 ($property, $trackedObjects)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Initialize(mixed ...$args){}
}
