<?php
namespace Avalonia\Rendering\Composition\Expressions;
class Expression extends \System\Object
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 * @since readonly
	 */
	public $Type;
	/**
	 * @param \System\String|string $expression
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	public static function Parse($expression){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionEvaluationContext& $context
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	abstract public function Evaluate($context);
	/**
	 * @param \System\Collections\Generic\HashSet_1 $references [generic: System\ValueTuple_2[System\String,System\String]
	 * @return \System\Void|void
	 */
	public function CollectReferences($references){}
	/**
	 * @return \System\String|string
	 */
	abstract protected function Print();
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionType $t
	 * @return \System\String|string
	 */
	protected static function OperatorName($t){}
}