<?php
namespace System\Diagnostics;
class StackFrameExtensions extends \System\Object
{

	/**
	 * @param \System\Diagnostics\StackFrame $stackFrame
	 * @return \System\Boolean|bool
	 */
	public static function HasNativeImage($stackFrame){}
	/**
	 * @param \System\Diagnostics\StackFrame $stackFrame
	 * @return \System\Boolean|bool
	 */
	public static function HasMethod($stackFrame){}
	/**
	 * @param \System\Diagnostics\StackFrame $stackFrame
	 * @return \System\Boolean|bool
	 */
	public static function HasILOffset($stackFrame){}
	/**
	 * @param \System\Diagnostics\StackFrame $stackFrame
	 * @return \System\Boolean|bool
	 */
	public static function HasSource($stackFrame){}
	/**
	 * @param \System\Diagnostics\StackFrame $stackFrame
	 * @return \System\IntPtr
	 */
	public static function GetNativeIP($stackFrame){}
	/**
	 * @param \System\Diagnostics\StackFrame $stackFrame
	 * @return \System\IntPtr
	 */
	public static function GetNativeImageBase($stackFrame){}
}