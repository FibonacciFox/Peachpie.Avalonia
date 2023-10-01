<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
interface IExpressionObject
{
	/**
	 * @param \System\String|string $name
	 */
	public function GetProperty($name);
}
