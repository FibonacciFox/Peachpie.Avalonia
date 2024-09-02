<?php
namespace System\Reflection;
class MethodBody extends \System\Object
{
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
	/**
	 * @return \System\Byte[]
	 */
	public function GetILAsByteArray(){}
}