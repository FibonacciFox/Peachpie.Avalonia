<?php
namespace Avalonia\FreeDesktop;
/**
 */
class NativeMethods extends \System\Object
{
	/**
	 * @param \System\Byte[] $filename
	 * @param \System\Byte[] $buffer
	 * @param \System\Int64|int $len
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function readlink($filename, $buffer, $len){}
	/**
	 * @param \System\String|string $path
	 * @return \System\String|string
	 */
	public static function ReadLink($path){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
