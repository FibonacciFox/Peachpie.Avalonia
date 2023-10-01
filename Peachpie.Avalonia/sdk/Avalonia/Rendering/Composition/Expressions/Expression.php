<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 */
class Expression extends \System\Object
{
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionType
	 */
	public  function get_Type(){}
	/**
	 * @param \System\String|string $expression
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	public static function Parse($expression){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionEvaluationContext& $context
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function Evaluate($context){}
	/**
	 * @param \System\Collections\Generic\HashSet_1 $references
	 * @return \System\Void|void
	 */
	public  function CollectReferences($references){}
	/**
	 * @return \System\String|string
	 */
	protected  function Print(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionType $t
	 * @return \System\String|string
	 */
	protected static function OperatorName($t){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
