<?php
namespace Avalonia\Rendering\Composition\Expressions;
class ConstantExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{

	/**
	 * @property
	 * @var \System\Single
	 * @since readonly
	 */
	public $Constant;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @param \System\Single $constant
	 */
	public function __construct($constant){}
}