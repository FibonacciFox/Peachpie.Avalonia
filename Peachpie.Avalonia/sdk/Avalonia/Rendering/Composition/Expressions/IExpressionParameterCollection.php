<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
interface IExpressionParameterCollection
{
	/**
	 * @param \System\String|string $name
	 */
	public function GetParameter($name);
	/**
	 * @param \System\String|string $name
	 */
	public function GetObjectParameter($name);
}
