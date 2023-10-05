<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
class ConstantExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $Constant;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @return \System\Single
	 */
	public  function get_Constant(){}
}
