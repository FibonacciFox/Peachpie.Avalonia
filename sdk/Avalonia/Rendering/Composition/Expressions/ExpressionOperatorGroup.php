<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExpressionOperatorGroupMethodsOverride
{
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	#[MethodOverride] private  function ToExpression_1($from, $to){}
	/**
	 * @return \Avalonia\Rendering\Composition\Expressions\Expression
	 */
	#[MethodOverride] public  function ToExpression_2(){}
}
/**
 */
class ExpressionOperatorGroup extends \System\ValueType
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $NotEmpty;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Empty;
	/**
	 * @return \System\Boolean
	 */
	public  function get_NotEmpty(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Empty(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $expr
	 * @return \System\Void|void
	 */
	public  function AppendFirst($expr){}
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\Expression $expr
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionType $op
	 * @return \System\Void|void
	 */
	public  function AppendWithOperator($expr, $op){}
	/**
	 * @uses ExpressionOperatorGroupMethodsOverride::ToExpression_1 ($from, $to)
	 * @uses ExpressionOperatorGroupMethodsOverride::ToExpression_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToExpression(mixed ...$args){}
}
