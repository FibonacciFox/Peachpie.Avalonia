<?php
namespace Avalonia\Rendering\Composition\Expressions;
class FunctionCallExpression extends \Avalonia\Rendering\Composition\Expressions\Expression
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Rendering\Composition\Expressions\Expression]
	 * @since readonly
	 */
	public $Parameters;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @param \System\String|string $name
	 * @param \System\Collections\Generic\List_1 $parameters [generic: Avalonia\Rendering\Composition\Expressions\Expression]
	 */
	public function __construct($name, $parameters){}
}