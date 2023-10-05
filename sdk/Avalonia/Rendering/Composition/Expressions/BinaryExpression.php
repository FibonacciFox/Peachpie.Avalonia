<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
class BinaryExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @property
	 */
	public readonly $Left;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @property
	 */
	public readonly $Right;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	public  function get_Left(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	public  function get_Right(){}
}
