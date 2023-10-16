<?php
namespace System\Reflection\Emit;
/**
 */
class LocalBuilder extends \System\Reflection\LocalVariableInfo
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPinned;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $LocalType;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LocalIndex;
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetLocalIndex(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	protected  function GetMethodBuilder(){}
}
