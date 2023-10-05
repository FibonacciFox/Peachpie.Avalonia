<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
class UnaryExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @property
	 */
	public readonly $Parameter;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	public  function get_Parameter(){}
}
