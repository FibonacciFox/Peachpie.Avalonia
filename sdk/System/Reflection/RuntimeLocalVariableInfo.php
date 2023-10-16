<?php
namespace System\Reflection;
/**
 */
class RuntimeLocalVariableInfo extends \System\Reflection\LocalVariableInfo
{
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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsPinned;
}
