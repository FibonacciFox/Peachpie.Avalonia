<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 */
interface IAnimationInstance
{
	/**
	 */
	public function get_TargetObject();
	/**
	 * @param \System\TimeSpan $now
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $currentValue
	 */
	public function Evaluate($now, $currentValue);
	/**
	 * @param \System\TimeSpan $startedAt
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $startingValue
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $property
	 */
	public function Initialize($startedAt, $startingValue, $property);
	/**
	 */
	public function Activate();
	/**
	 */
	public function Deactivate();
	/**
	 */
	public function Invalidate();
}
