<?php
namespace System\Diagnostics\Contracts;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ContractMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Assume_1($condition){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Assume_2($condition, $userMessage){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Assert_1($condition){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Assert_2($condition, $userMessage){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Requires_1($condition){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Requires_2($condition, $userMessage){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Requires_3($condition){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Requires_4($condition, $userMessage){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Ensures_1($condition){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Ensures_2($condition, $userMessage){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function EnsuresOnThrow_1($condition){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function EnsuresOnThrow_2($condition, $userMessage){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Invariant_1($condition){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Invariant_2($condition, $userMessage){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function ForAll_1($fromInclusive, $toExclusive, $predicate){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function ForAll_2($collection, $predicate){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Exists_1($fromInclusive, $toExclusive, $predicate){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Exists_2($collection, $predicate){}
}
/**
 */
class Contract extends \System\Object
{
	/**
	 * @uses ContractMethodsOverride::Assume_1 ($condition)
	 * @uses ContractMethodsOverride::Assume_2 ($condition, $userMessage)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Assume(mixed ...$args){}
	/**
	 * @uses ContractMethodsOverride::Assert_1 ($condition)
	 * @uses ContractMethodsOverride::Assert_2 ($condition, $userMessage)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Assert(mixed ...$args){}
	/**
	 * @uses ContractMethodsOverride::Requires_1 ($condition)
	 * @uses ContractMethodsOverride::Requires_2 ($condition, $userMessage)
	 * @uses ContractMethodsOverride::Requires_3 ($condition)
	 * @uses ContractMethodsOverride::Requires_4 ($condition, $userMessage)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Requires(mixed ...$args){}
	/**
	 * @uses ContractMethodsOverride::Ensures_1 ($condition)
	 * @uses ContractMethodsOverride::Ensures_2 ($condition, $userMessage)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Ensures(mixed ...$args){}
	/**
	 * @uses ContractMethodsOverride::EnsuresOnThrow_1 ($condition)
	 * @uses ContractMethodsOverride::EnsuresOnThrow_2 ($condition, $userMessage)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EnsuresOnThrow(mixed ...$args){}
	/**
	 * @return \System\Diagnostics\Contracts\T
	 */
	public static function Result(){}
	/**
	 * @param \System\Diagnostics\Contracts\T& $value
	 * @return \System\Diagnostics\Contracts\T
	 */
	public static function ValueAtReturn($value){}
	/**
	 * @param \System\Diagnostics\Contracts\T $value
	 * @return \System\Diagnostics\Contracts\T
	 */
	public static function OldValue($value){}
	/**
	 * @uses ContractMethodsOverride::Invariant_1 ($condition)
	 * @uses ContractMethodsOverride::Invariant_2 ($condition, $userMessage)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Invariant(mixed ...$args){}
	/**
	 * @uses ContractMethodsOverride::ForAll_1 ($fromInclusive, $toExclusive, $predicate)
	 * @uses ContractMethodsOverride::ForAll_2 ($collection, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ForAll(mixed ...$args){}
	/**
	 * @uses ContractMethodsOverride::Exists_1 ($fromInclusive, $toExclusive, $predicate)
	 * @uses ContractMethodsOverride::Exists_2 ($collection, $predicate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Exists(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function EndContractBlock(){}
	/**
	 * @param \System\Diagnostics\Contracts\ContractFailureKind $kind
	 * @param \System\String|string $contractKind
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AssertMustUseRewriter($kind, $contractKind){}
	/**
	 * @param \System\Diagnostics\Contracts\ContractFailureKind $failureKind
	 * @param \System\String|string $userMessage
	 * @param \System\String|string $conditionText
	 * @param \System\Exception $innerException
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReportFailure($failureKind, $userMessage, $conditionText, $innerException){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public static function add_ContractFailed($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public static function remove_ContractFailed($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
