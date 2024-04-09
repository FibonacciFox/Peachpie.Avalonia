<?php
namespace System\Runtime\InteropServices;
final class ComInterfaceDispatch extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $Vtable;
	/**
	 * @param \System\Runtime\InteropServices\ComWrappers+ComInterfaceDispatch* $dispatchPtr
	 * @return \T|object
	 */
	public static function GetInstance($dispatchPtr){}
}