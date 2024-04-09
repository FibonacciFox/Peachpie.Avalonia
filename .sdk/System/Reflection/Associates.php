<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AssociatesOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $tkMethod
	 * @param \System\RuntimeType $declaredType
	 * @param \System\RuntimeType $reflectedType
	 * @return \System\Reflection\RuntimeMethodInfo
	 */
	#[MethodOverride]private static function AssignAssociates_1 ($tkMethod, $declaredType, $reflectedType){}
	/**
	 * @deprecated
	 * @param \System\Reflection\MetadataImport $scope
	 * @param \System\Int32|int $mdPropEvent
	 * @param \System\RuntimeType $declaringType
	 * @param \System\RuntimeType $reflectedType
	 * @param \System\Reflection\RuntimeMethodInfo& &$addOn
	 * @param \System\Reflection\RuntimeMethodInfo& &$removeOn
	 * @param \System\Reflection\RuntimeMethodInfo& &$fireOn
	 * @param \System\Reflection\RuntimeMethodInfo& &$getter
	 * @param \System\Reflection\RuntimeMethodInfo& &$setter
	 * @param \System\Reflection\MethodInfo &$other
	 * @param \System\Boolean& &$composedOfAllPrivateMethods
	 * @param \System\Reflection\BindingFlags& &$bindingFlags
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function AssignAssociates_2 ($scope, $mdPropEvent, $declaringType, $reflectedType, &$addOn, &$removeOn, &$fireOn, &$getter, &$setter, &$other, &$composedOfAllPrivateMethods, &$bindingFlags){}
}
class Associates extends \System\Object
{
	use AssociatesOverride;

	/**
	 * @param \System\Reflection\MethodInfo $associate
	 * @param \System\Boolean|bool $nonPublic
	 * @return \System\Boolean|bool
	 */
	protected static function IncludeAccessor($associate, $nonPublic){}
	/**
	 * @uses AssociatesOverride::AssignAssociates_1 <br>private , args: ($tkMethod, $declaredType, $reflectedType)<br>
	 * @uses AssociatesOverride::AssignAssociates_2 <br>protected , args: ($scope, $mdPropEvent, $declaringType, $reflectedType, &$addOn, &$removeOn, &$fireOn, &$getter, &$setter, &$other, &$composedOfAllPrivateMethods, &$bindingFlags)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\RuntimeMethodInfo|\System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function AssignAssociates (\override ...$args){}
}