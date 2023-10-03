<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ClipboardFormatsMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetFormat_1($format){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] public static function GetFormat_2($format){}
}
/**
 */
class ClipboardFormats extends \System\Object
{
	/**
	 * @param \System\UInt16 $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function QueryFormatName($format){}
	/**
	 * @uses ClipboardFormatsMethodsOverride::GetFormat_1 ($format)
	 * @uses ClipboardFormatsMethodsOverride::GetFormat_2 ($format)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFormat(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
