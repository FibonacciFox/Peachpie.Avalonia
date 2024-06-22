<?php
namespace System\Diagnostics\Contracts;
final class ContractException extends \System\Exception implements
	\System\Runtime\Serialization\ISerializable
{

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Diagnostics\Contracts\ContractFailureKind
	 * @since readonly
	 */
	public $Kind;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Failure;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $UserMessage;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Condition;
	/**
	 * @property
	 * @var \System\Reflection\MethodBase
	 * @since readonly
	 */
	public $TargetSite;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\Collections\IDictionary
	 * @since readonly
	 */
	public $Data;
	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $InnerException;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $HelpLink;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Source;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $HResult;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $StackTrace;
	/**
	 * @param \System\Diagnostics\Contracts\ContractFailureKind $kind
	 * @param \System\String|string $failure
	 * @param \System\String|string $userMessage
	 * @param \System\String|string $condition
	 * @param \System\Exception $innerException
	 */
	public function __construct($kind, $failure, $userMessage, $condition, $innerException){}
}