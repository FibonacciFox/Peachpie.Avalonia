<?php
namespace Avalonia\Rendering\Composition\Expressions;
final class ExpressionEvaluationContext extends \System\ValueType
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public $StartingValue;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public $CurrentValue;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public $FinalValue;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\IExpressionObject
	 */
	public $Target;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\IExpressionParameterCollection
	 */
	public $Parameters;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\IExpressionForeignFunctionInterface
	 */
	public $ForeignFunctionInterface;

}