<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AnimationInstanceBaseMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Initialize_1($property, $trackedObjects){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Initialize_2($startedAt, $startingValue, $property){}
}
/**
 */
class AnimationInstanceBase extends \System\Object implements 
	\Avalonia\Rendering\Composition\Animations\IAnimationInstance,
	\Avalonia\Rendering\Composition\Server\IServerClockItem
{
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerObject
	 * @property
	 */
	public readonly $TargetObject;
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\PropertySetSnapshot
	 */
	protected  function get_Parameters(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerObject
	 */
	public  function get_TargetObject(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected  function get_Property(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Property($value){}
	/**
	 * @uses AnimationInstanceBaseMethodsOverride::Initialize_1 ($property, $trackedObjects)
	 * @uses AnimationInstanceBaseMethodsOverride::Initialize_2 ($startedAt, $startingValue, $property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Initialize(mixed ...$args){}
	/**
	 * @param \System\TimeSpan $now
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $currentValue
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	protected  function EvaluateCore($now, $currentValue){}
	/**
	 * @param \System\TimeSpan $now
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $currentValue
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function Evaluate($now, $currentValue){}
	/**
	 * @return \System\Void|void
	 */
	public  function Activate(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Deactivate(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Invalidate(){}
	/**
	 * @return \System\Void|void
	 */
	public  function OnTick(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
