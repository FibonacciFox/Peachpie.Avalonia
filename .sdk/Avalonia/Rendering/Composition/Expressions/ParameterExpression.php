<?php
namespace Avalonia\Rendering\Composition\Expressions;
class ParameterExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @param \System\String|string $name
	 */
	public function __construct($name){}
}