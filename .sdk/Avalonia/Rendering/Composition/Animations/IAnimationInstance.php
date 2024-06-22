<?php
namespace Avalonia\Rendering\Composition\Animations;
interface IAnimationInstance
{


	/**
	 * @param \System\TimeSpan $now
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $currentValue
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public function Evaluate($now, $currentValue);
	/**
	 * @param \System\TimeSpan $startedAt
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $startingValue
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $property
	 * @return \System\Void|void
	 */
	public function Initialize($startedAt, $startingValue, $property);
	/**
	 * @return \System\Void|void
	 */
	public function Activate();
	/**
	 * @return \System\Void|void
	 */
	public function Deactivate();
	/**
	 * @return \System\Void|void
	 */
	public function Invalidate();
}