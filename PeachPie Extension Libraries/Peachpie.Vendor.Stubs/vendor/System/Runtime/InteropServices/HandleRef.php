<?php
namespace System\Runtime\InteropServices;
final class HandleRef extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Wrapper;
	/**
	 * @property
	 * @var \System\IntPtr
	 * @since readonly
	 */
	public $Handle;
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
	/**
	 * @param \System\Object|object $wrapper
	 * @param \System\IntPtr $handle
	 */
	public function __construct($wrapper, $handle){}
}