<?php
namespace System\Runtime\CompilerServices;
/**
 */
class ContractHelper extends \System\Object
{
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	protected static function add_InternalContractFailed($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	protected static function remove_InternalContractFailed($value){}
	/**
	 * @param \System\Diagnostics\Contracts\ContractFailureKind $failureKind
	 * @param \System\String|string $userMessage
	 * @param \System\String|string $conditionText
	 * @param \System\Exception $innerException
	 * @return \System\String|string
	 */
	public static function RaiseContractFailedEvent($failureKind, $userMessage, $conditionText, $innerException){}
	/**
	 * @param \System\Diagnostics\Contracts\ContractFailureKind $kind
	 * @param \System\String|string $displayMessage
	 * @param \System\String|string $userMessage
	 * @param \System\String|string $conditionText
	 * @param \System\Exception $innerException
	 * @return \System\Void|void
	 */
	public static function TriggerFailure($kind, $displayMessage, $userMessage, $conditionText, $innerException){}
	/**
	 * @param \System\Diagnostics\Contracts\ContractFailureKind $failureKind
	 * @param \System\String|string $conditionText
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFailureMessage($failureKind, $conditionText){}
	/**
	 * @param \System\Diagnostics\Contracts\ContractFailureKind $failureKind
	 * @param \System\String|string $userMessage
	 * @param \System\String|string $conditionText
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDisplayMessage($failureKind, $userMessage, $conditionText){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
