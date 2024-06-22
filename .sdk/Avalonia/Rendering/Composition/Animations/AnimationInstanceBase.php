<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AnimationInstanceBaseOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $property
	 * @param \System\Collections\Generic\HashSet_1 $trackedObjects [generic: System\ValueTuple_2[System\String,System\String]
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function Initialize_1 ($property, $trackedObjects){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $startedAt
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $startingValue
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $property
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Initialize_2 ($startedAt, $startingValue, $property){}
}
class AnimationInstanceBase extends \System\Object implements
	\Avalonia\Rendering\Composition\Animations\IAnimationInstance,
	\Avalonia\Rendering\Composition\Server\IServerClockItem
{
	use AnimationInstanceBaseOverride;

	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerObject
	 * @since readonly
	 */
	public $TargetObject;
	/**
	 * @uses AnimationInstanceBaseOverride::Initialize_1 <br>protected , args: ($property, $trackedObjects)<br>
	 * @uses AnimationInstanceBaseOverride::Initialize_2 <br>public , args: ($startedAt, $startingValue, $property)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Initialize (\override ...$args){}
	/**
	 * @param \System\TimeSpan $now
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $currentValue
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	abstract protected function EvaluateCore($now, $currentValue);
	/**
	 * @param \System\TimeSpan $now
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $currentValue
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public function Evaluate($now, $currentValue){}
	/**
	 * @return \System\Void|void
	 */
	public function Activate(){}
	/**
	 * @return \System\Void|void
	 */
	public function Deactivate(){}
	/**
	 * @return \System\Void|void
	 */
	public function Invalidate(){}
	/**
	 * @return \System\Void|void
	 */
	public function OnTick(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerObject $target
	 * @param \Avalonia\Rendering\Composition\Animations\PropertySetSnapshot $parameters
	 */
	public function __construct($target, $parameters){}
}