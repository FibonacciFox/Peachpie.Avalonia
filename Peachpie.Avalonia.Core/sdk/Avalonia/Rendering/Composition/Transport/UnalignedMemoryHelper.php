<?php
namespace Avalonia\Rendering\Composition\Transport;
/**
 */
class UnalignedMemoryHelper extends \System\Object
{
	/**
	 * @param \System\Byte* $src
	 * @return \Avalonia\Rendering\Composition\Transport\T
	 */
	public static function ReadUnaligned($src){}
	/**
	 * @param \System\Byte* $dst
	 * @param \Avalonia\Rendering\Composition\Transport\T $value
	 * @return \System\Void|void
	 */
	public static function WriteUnaligned($dst, $value){}
	/**
	 * @param \System\Byte* $dst
	 * @param \System\Byte* $src
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function UnalignedMemcpy($dst, $src, $count){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
