<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AssociatesMethodsOverride
{
	/**
	 * @return \System\Reflection\RuntimeMethodInfo
	 */
	#[MethodOverride] private static function AssignAssociates_1($tkMethod, $declaredType, $reflectedType){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected static function AssignAssociates_2($scope, $mdPropEvent, $declaringType, $reflectedType, $addOn, $removeOn, $fireOn, $getter, $setter, $other, $composedOfAllPrivateMethods, $bindingFlags){}
}
/**
 */
class Associates extends \System\Object
{
	/**
	 * @param \System\Reflection\MethodInfo $associate
	 * @param \System\Boolean $nonPublic
	 * @return \System\Boolean
	 */
	protected static function IncludeAccessor($associate, $nonPublic){}
	/**
	 * @uses AssociatesMethodsOverride::AssignAssociates_1 ($tkMethod, $declaredType, $reflectedType)
	 * @uses AssociatesMethodsOverride::AssignAssociates_2 ($scope, $mdPropEvent, $declaringType, $reflectedType, $addOn, $removeOn, $fireOn, $getter, $setter, $other, $composedOfAllPrivateMethods, $bindingFlags)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AssignAssociates(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
