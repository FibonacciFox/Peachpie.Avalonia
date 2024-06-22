<?php
namespace Avalonia\Rendering\Composition\Expressions;
class BinaryExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{

	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @since readonly
	 */
	public $Left;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @since readonly
	 */
	public $Right;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $left
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $right
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionType $type
	 */
	public function __construct($left, $right, $type){}
}