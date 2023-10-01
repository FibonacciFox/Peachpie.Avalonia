<?php
namespace Avalonia\Markup\Parsers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExpressionObserverBuilderMethodsOverride
{
	/**
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	#[MethodOverride] public static function Build_1($root, $expression, $enableDataValidation, $description, $typeResolver){}
	/**
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	#[MethodOverride] public static function Build_2($rootObservable, $expression, $enableDataValidation, $description, $typeResolver){}
	/**
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	#[MethodOverride] public static function Build_3($rootGetter, $expression, $update, $enableDataValidation, $description, $typeResolver){}
}
/**
 */
class ExpressionObserverBuilder extends \System\Object
{
	/**
	 * @param \System\String|string $expression
	 * @param \System\Boolean $enableValidation
	 * @param \System\Func_3 $typeResolver
	 * @param \Avalonia\Controls\INameScope $nameScope
	 * @return \System\ValueTuple_2
	 */
	protected static function Parse($expression, $enableValidation, $typeResolver, $nameScope){}
	/**
	 * @uses ExpressionObserverBuilderMethodsOverride::Build_1 ($root, $expression, $enableDataValidation, $description, $typeResolver)
	 * @uses ExpressionObserverBuilderMethodsOverride::Build_2 ($rootObservable, $expression, $enableDataValidation, $description, $typeResolver)
	 * @uses ExpressionObserverBuilderMethodsOverride::Build_3 ($rootGetter, $expression, $update, $enableDataValidation, $description, $typeResolver)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Build(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
