<?php
namespace System\Security\AccessControl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AuthorizationRuleCollectionMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($rules, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
}
/**
 */
class AuthorizationRuleCollection extends \System\Collections\ReadOnlyCollectionBase implements 
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Security\AccessControl\AuthorizationRule
	 * @property
	 */
	public readonly $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @param \System\Security\AccessControl\AuthorizationRule $rule
	 * @return \System\Void|void
	 */
	public  function AddRule($rule){}
	/**
	 * @uses AuthorizationRuleCollectionMethodsOverride::CopyTo_1 ($rules, $index)
	 * @uses AuthorizationRuleCollectionMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Security\AccessControl\AuthorizationRule
	 */
	public  function get_Item($index){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsSynchronized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SyncRoot(){}
}
