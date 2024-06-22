<?php
namespace System\Diagnostics\Contracts;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ContractOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Assume_1 ($condition){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $userMessage
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Assume_2 ($condition, $userMessage){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Assert_1 ($condition){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $userMessage
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Assert_2 ($condition, $userMessage){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Requires_1 ($condition){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $userMessage
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Requires_2 ($condition, $userMessage){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Requires_3 ($condition){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $userMessage
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Requires_4 ($condition, $userMessage){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Ensures_1 ($condition){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $userMessage
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Ensures_2 ($condition, $userMessage){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function EnsuresOnThrow_1 ($condition){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $userMessage
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function EnsuresOnThrow_2 ($condition, $userMessage){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Invariant_1 ($condition){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $condition
	 * @param \System\String|string $userMessage
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Invariant_2 ($condition, $userMessage){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $fromInclusive
	 * @param \System\Int32|int $toExclusive
	 * @param \System\Predicate_1 $predicate [generic: System\Int32]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function ForAll_1 ($fromInclusive, $toExclusive, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $collection [generic: T]
	 * @param \System\Predicate_1 $predicate [generic: T]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function ForAll_2 ($collection, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $fromInclusive
	 * @param \System\Int32|int $toExclusive
	 * @param \System\Predicate_1 $predicate [generic: System\Int32]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Exists_1 ($fromInclusive, $toExclusive, $predicate){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $collection [generic: T]
	 * @param \System\Predicate_1 $predicate [generic: T]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Exists_2 ($collection, $predicate){}
}
class Contract extends \System\Object
{
	use ContractOverride;


	/**
	 * @uses ContractOverride::Assume_1 <br>public , args: ($condition)<br>
	 * @uses ContractOverride::Assume_2 <br>public , args: ($condition, $userMessage)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Assume (\override ...$args){}
	/**
	 * @uses ContractOverride::Assert_1 <br>public , args: ($condition)<br>
	 * @uses ContractOverride::Assert_2 <br>public , args: ($condition, $userMessage)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Assert (\override ...$args){}
	/**
	 * @uses ContractOverride::Requires_1 <br>public , args: ($condition)<br>
	 * @uses ContractOverride::Requires_2 <br>public , args: ($condition, $userMessage)<br>
	 * @uses ContractOverride::Requires_3 <br>public , args: ($condition)<br>
	 * @uses ContractOverride::Requires_4 <br>public , args: ($condition, $userMessage)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Requires (\override ...$args){}
	/**
	 * @uses ContractOverride::Ensures_1 <br>public , args: ($condition)<br>
	 * @uses ContractOverride::Ensures_2 <br>public , args: ($condition, $userMessage)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Ensures (\override ...$args){}
	/**
	 * @uses ContractOverride::EnsuresOnThrow_1 <br>public , args: ($condition)<br>
	 * @uses ContractOverride::EnsuresOnThrow_2 <br>public , args: ($condition, $userMessage)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function EnsuresOnThrow (\override ...$args){}
	/**
	 * @return \T|object
	 */
	public static function Result(){}
	/**
	 * @param \T& &$value
	 * @return \T|object
	 */
	public static function ValueAtReturn(&$value){}
	/**
	 * @param \T|object $value
	 * @return \T|object
	 */
	public static function OldValue($value){}
	/**
	 * @uses ContractOverride::Invariant_1 <br>public , args: ($condition)<br>
	 * @uses ContractOverride::Invariant_2 <br>public , args: ($condition, $userMessage)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Invariant (\override ...$args){}
	/**
	 * @uses ContractOverride::ForAll_1 <br>public , args: ($fromInclusive, $toExclusive, $predicate)<br>
	 * @uses ContractOverride::ForAll_2 <br>public , args: ($collection, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function ForAll (\override ...$args){}
	/**
	 * @uses ContractOverride::Exists_1 <br>public , args: ($fromInclusive, $toExclusive, $predicate)<br>
	 * @uses ContractOverride::Exists_2 <br>public , args: ($collection, $predicate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Exists (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function EndContractBlock(){}
	private static function AssertMustUseRewriter($kind, $contractKind){}
	private static function ReportFailure($failureKind, $userMessage, $conditionText, $innerException){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Diagnostics\Contracts\ContractFailedEventArgs]
	 * @return \System\Void|void
	 */
	public static function add_ContractFailed($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Diagnostics\Contracts\ContractFailedEventArgs]
	 * @return \System\Void|void
	 */
	public static function remove_ContractFailed($value){}
}