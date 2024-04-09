<?php
namespace Avalonia\Rendering\Composition\Expressions;
class UnaryExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\Expression
	 * @since readonly
	 */
	public $Parameter;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $parameter
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionType $type
	 */
	public function __construct($parameter, $type){}
}