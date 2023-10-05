<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
class ConditionalExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @property
	 */
	public readonly $Condition;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @property
	 */
	public readonly $TruePart;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @property
	 */
	public readonly $FalsePart;
	/**
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	public  function get_Condition(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	public  function get_TruePart(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	public  function get_FalsePart(){}
}
