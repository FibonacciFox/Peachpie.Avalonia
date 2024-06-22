<?php
namespace System\Runtime\CompilerServices;
class ContractHelper extends \System\Object
{


	/**
	 * @param \System\EventHandler_1 $value [generic: System\Diagnostics\Contracts\ContractFailedEventArgs]
	 * @return \System\Void|void
	 */
	protected static function add_InternalContractFailed($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\Diagnostics\Contracts\ContractFailedEventArgs]
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
	private static function GetFailureMessage($failureKind, $conditionText){}
	private static function GetDisplayMessage($failureKind, $userMessage, $conditionText){}
}