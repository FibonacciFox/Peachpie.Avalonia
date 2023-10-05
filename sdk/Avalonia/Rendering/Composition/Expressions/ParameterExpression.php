<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
class ParameterExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
}
