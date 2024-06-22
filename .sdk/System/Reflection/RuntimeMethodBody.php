<?php
namespace System\Reflection;
final class RuntimeMethodBody extends \System\Reflection\MethodBody
{

	/**
	 * @field
	 * @var \System\Reflection\MethodBase
	 */
	protected $_methodBase;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $LocalSignatureMetadataToken;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[System\Reflection\LocalVariableInfo]
	 * @since readonly
	 */
	public $LocalVariables;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MaxStackSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $InitLocals;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[System\Reflection\ExceptionHandlingClause]
	 * @since readonly
	 */
	public $ExceptionHandlingClauses;

}