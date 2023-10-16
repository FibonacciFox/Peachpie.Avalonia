<?php
namespace System\Diagnostics\Contracts;
/**
 */
class ContractFailedEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Exception
	 * @field
	 */
	protected $thrownDuringHandler;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Message;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Condition;
	/**
	 * @var \System\Diagnostics\Contracts\ContractFailureKind
	 * @property
	 */
	public readonly $FailureKind;
	/**
	 * @var \System\Exception
	 * @property
	 */
	public readonly $OriginalException;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Handled;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Unwind;
	/**
	 * @return \System\String|string
	 */
	public  function get_Message(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Condition(){}
	/**
	 * @return \System\Diagnostics\Contracts\ContractFailureKind
	 */
	public  function get_FailureKind(){}
	/**
	 * @return \System\Exception
	 */
	public  function get_OriginalException(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Handled(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetHandled(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Unwind(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetUnwind(){}
}
