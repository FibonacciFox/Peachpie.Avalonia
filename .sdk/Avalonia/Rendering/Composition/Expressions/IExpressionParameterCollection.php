<?php
namespace Avalonia\Rendering\Composition\Expressions;
interface IExpressionParameterCollection
{

	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public function GetParameter($name);
	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Rendering\Composition\Expressions\IExpressionObject
	 */
	public function GetObjectParameter($name);
}