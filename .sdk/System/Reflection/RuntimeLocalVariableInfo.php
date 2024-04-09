<?php
namespace System\Reflection;
final class RuntimeLocalVariableInfo extends \System\Reflection\LocalVariableInfo
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $LocalType;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $LocalIndex;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPinned;

}