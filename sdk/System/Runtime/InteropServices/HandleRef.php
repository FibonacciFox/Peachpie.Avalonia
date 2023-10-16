<?php
namespace System\Runtime\InteropServices;
/**
 */
class HandleRef extends \System\ValueType
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Wrapper;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Handle;
	/**
	 * @return \System\Object|object
	 */
	public  function get_Wrapper(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @param \System\Runtime\InteropServices\HandleRef $value
	 * @return \System\IntPtr
	 */
	public static function op_Explicit($value){}
	/**
	 * @param \System\Runtime\InteropServices\HandleRef $value
	 * @return \System\IntPtr
	 */
	public static function ToIntPtr($value){}
}
