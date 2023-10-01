<?php
namespace Avalonia\Data\Core\Parsers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExpressionVisitorNodeBuilderMethodsOverride
{
	/**
	 * @return \System\Linq\Expressions\Expression
	 */
	#[MethodOverride] public  function Visit_1($node){}
	/**
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1
	 */
	#[MethodOverride] public  function Visit_2($nodes){}
	/**
	 * @return \System\Linq\Expressions\T
	 */
	#[MethodOverride] public  function VisitAndConvert_1($node, $callerName){}
	/**
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1
	 */
	#[MethodOverride] public  function VisitAndConvert_2($nodes, $callerName){}
}
/**
 */
class ExpressionVisitorNodeBuilder extends \System\Linq\Expressions\ExpressionVisitor
{
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_Nodes(){}
	/**
	 * @param \System\Linq\Expressions\Expression $expr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetArgumentExpressionValue($expr){}
	/**
	 * @param \System\Reflection\MethodInfo $method
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryGetPropertyFromMethod($method){}
	/**
	 * @uses ExpressionVisitorNodeBuilderMethodsOverride::Visit_1 ($node)
	 * @uses ExpressionVisitorNodeBuilderMethodsOverride::Visit_2 ($nodes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Visit(mixed ...$args){}
	/**
	 * @uses ExpressionVisitorNodeBuilderMethodsOverride::VisitAndConvert_1 ($node, $callerName)
	 * @uses ExpressionVisitorNodeBuilderMethodsOverride::VisitAndConvert_2 ($nodes, $callerName)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function VisitAndConvert(mixed ...$args){}
}
