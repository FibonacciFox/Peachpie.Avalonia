<?php
namespace System\Reflection\Emit;
final class LocalBuilder extends \System\Reflection\LocalVariableInfo
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPinned;
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
	 * @return \System\Int32|int
	 */
	protected function GetLocalIndex(){}
	/**
	 * @return \System\Reflection\MethodInfo
	 */
	protected function GetMethodBuilder(){}
}