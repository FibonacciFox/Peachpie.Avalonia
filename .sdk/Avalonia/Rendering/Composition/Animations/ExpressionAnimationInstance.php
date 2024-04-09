<?php
namespace Avalonia\Rendering\Composition\Animations;
class ExpressionAnimationInstance extends \Avalonia\Rendering\Composition\Animations\AnimationInstanceBase implements
	\Avalonia\Rendering\Composition\Animations\IAnimationInstance,
	\Avalonia\Rendering\Composition\Server\IServerClockItem
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerObject
	 * @since readonly
	 */
	public $TargetObject;
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $expression
	 * @param \Avalonia\Rendering\Composition\Server\ServerObject $target
	 * @param \System\Nullable_1 $finalValue [generic: Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @param \Avalonia\Rendering\Composition\Animations\PropertySetSnapshot $parameters
	 */
	public function __construct($expression, $target, $finalValue, $parameters){}
}