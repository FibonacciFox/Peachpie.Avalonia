<?php
namespace Avalonia\Rendering\Composition\Expressions;
interface IExpressionForeignFunctionInterface
{

	/**
	 * @param \System\String|string $name
	 * @param \System\Collections\Generic\IReadOnlyList_1 $arguments [generic: Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant& &$result
	 * @return \System\Boolean|bool
	 */
	public function Call($name, $arguments, &$result);
}