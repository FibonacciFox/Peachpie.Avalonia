<?php
namespace System\Diagnostics\Contracts;
final class ContractFailedEventArgs extends \System\EventArgs
{
	/**
	 * @field
	 * @var \System\Exception
	 */
	protected $thrownDuringHandler;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Condition;
	/**
	 * @property
	 * @var \System\Diagnostics\Contracts\ContractFailureKind
	 * @since readonly
	 */
	public $FailureKind;
	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $OriginalException;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Handled;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Unwind;
	/**
	 * @return \System\Void|void
	 */
	public function SetHandled(){}
	/**
	 * @return \System\Void|void
	 */
	public function SetUnwind(){}
	/**
	 * @param \System\Diagnostics\Contracts\ContractFailureKind $failureKind
	 * @param \System\String|string $message
	 * @param \System\String|string $condition
	 * @param \System\Exception $originalException
	 */
	public function __construct($failureKind, $message, $condition, $originalException){}
}