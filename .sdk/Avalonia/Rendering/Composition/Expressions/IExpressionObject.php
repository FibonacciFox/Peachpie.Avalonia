<?php
namespace Avalonia\Rendering\Composition\Expressions;
interface IExpressionObject
{

	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public function GetProperty($name);
}