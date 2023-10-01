<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
interface IExpressionForeignFunctionInterface
{
	/**
	 * @param \System\String|string $name
	 * @param \System\Collections\Generic\IReadOnlyList_1 $arguments
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant& $result
	 */
	public function Call($name, $arguments, $result);
}
