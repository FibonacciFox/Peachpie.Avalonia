<?php
namespace Avalonia\Rendering\Composition\Expressions;
class ConditionalExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{

	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @since readonly
	 */
	public $Condition;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @since readonly
	 */
	public $TruePart;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @since readonly
	 */
	public $FalsePart;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $condition
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $truePart
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $falsePart
	 */
	public function __construct($condition, $truePart, $falsePart){}
}