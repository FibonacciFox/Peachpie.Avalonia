<?php
namespace System\Security\Principal;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NTAccountMethodsOverride
{
	/**
	 * @return \System\Security\Principal\IdentityReference
	 */
	#[MethodOverride] public  function Translate_1($targetType){}
	/**
	 * @return \System\Security\Principal\IdentityReferenceCollection
	 */
	#[MethodOverride] protected static function Translate_2($sourceAccounts, $targetType, $forceSuccess){}
	/**
	 * @return \System\Security\Principal\IdentityReferenceCollection
	 */
	#[MethodOverride] protected static function Translate_3($sourceAccounts, $targetType, $someFailed){}
}
/**
 */
class NTAccount extends \System\Security\Principal\IdentityReference
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Value;
	/**
	 * @uses NTAccountMethodsOverride::Translate_1 ($targetType)
	 * @uses NTAccountMethodsOverride::Translate_2 ($sourceAccounts, $targetType, $forceSuccess)
	 * @uses NTAccountMethodsOverride::Translate_3 ($sourceAccounts, $targetType, $someFailed)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Translate(mixed ...$args){}
	/**
	 * @param \System\Security\Principal\NTAccount $left
	 * @param \System\Security\Principal\NTAccount $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Security\Principal\NTAccount $left
	 * @param \System\Security\Principal\NTAccount $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Security\Principal\IdentityReferenceCollection $sourceAccounts
	 * @param \System\Boolean& $someFailed
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TranslateToSids($sourceAccounts, $someFailed){}
}
