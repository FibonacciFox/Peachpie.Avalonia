<?php
namespace System\Reflection;
/**
 */
class MethodBody extends \System\Object
{
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
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LocalSignatureMetadataToken(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_LocalVariables(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxStackSize(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_InitLocals(){}
	/**
	 * @return \System\Byte[]
	 */
	public  function GetILAsByteArray(){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_ExceptionHandlingClauses(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
