<?php
namespace System;
/**
 */
class RuntimeMethodHandleInternal extends \System\ValueType
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $m_handle;
	/**
	 * @return \System\RuntimeMethodHandleInternal
	 */
	protected static function get_EmptyHandle(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsNullHandle(){}
	/**
	 * @return \System\IntPtr
	 */
	protected  function get_Value(){}
}
