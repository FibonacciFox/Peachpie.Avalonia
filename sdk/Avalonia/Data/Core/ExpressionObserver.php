<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExpressionObserverMethodsOverride
{
	/**
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	#[MethodOverride] public static function Create_1($root, $expression, $enableDataValidation, $description){}
	/**
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	#[MethodOverride] public static function Create_2($rootObservable, $expression, $enableDataValidation, $description){}
	/**
	 * @return \Avalonia\Data\Core\ExpressionObserver
	 */
	#[MethodOverride] public static function Create_3($rootGetter, $expression, $update, $enableDataValidation, $description){}
}
/**
 */
class ExpressionObserver extends \Avalonia\Reactive\LightweightObservableBase_1 implements 
	\System\IObservable_1,
	\Avalonia\IDescription
{
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Data\Core\Plugins\IPropertyAccessorPlugin]
	 * @field
	 */
	public readonly $PropertyAccessors;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Data\Core\Plugins\IDataValidationPlugin]
	 * @field
	 */
	public readonly $DataValidators;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Data\Core\Plugins\IStreamPlugin]
	 * @field
	 */
	public readonly $StreamHandlers;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Description;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Expression;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ResultType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasObservers;
	/**
	 * @uses ExpressionObserverMethodsOverride::Create_1 ($root, $expression, $enableDataValidation, $description)
	 * @uses ExpressionObserverMethodsOverride::Create_2 ($rootObservable, $expression, $enableDataValidation, $description)
	 * @uses ExpressionObserverMethodsOverride::Create_3 ($rootGetter, $expression, $update, $enableDataValidation, $description)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTransformNodesFromChain(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_TransformNodes(){}
	/**
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Boolean
	 */
	public  function SetValue($value, $priority){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Description(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Expression(){}
	/**
	 * @return \System\Type
	 */
	public  function get_ResultType(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Leaf(){}
	/**
	 * @param \System\Linq\Expressions\LambdaExpression $expression
	 * @param \System\Boolean $enableDataValidation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Parse($expression, $enableDataValidation){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StartRoot(){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValueChanged($value){}
}
