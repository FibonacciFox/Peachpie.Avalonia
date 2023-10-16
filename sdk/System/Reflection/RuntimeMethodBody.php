<?php
namespace System\Reflection;
/**
 */
class RuntimeMethodBody extends \System\Reflection\MethodBody
{
	/**
	 * @var \System\Reflection\MethodBase
	 * @field
	 */
	protected $_methodBase;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LocalSignatureMetadataToken;
	/**
	 * @var \System\Collections\Generic\IList_1[System\Reflection\LocalVariableInfo]
	 * @property
	 */
	public readonly $LocalVariables;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaxStackSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $InitLocals;
	/**
	 * @var \System\Collections\Generic\IList_1[System\Reflection\ExceptionHandlingClause]
	 * @property
	 */
	public readonly $ExceptionHandlingClauses;
}
