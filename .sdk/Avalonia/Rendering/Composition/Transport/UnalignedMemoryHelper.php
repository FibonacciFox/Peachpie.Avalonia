<?php
namespace Avalonia\Rendering\Composition\Transport;
class UnalignedMemoryHelper extends \System\Object
{


	/**
	 * @param \System\Byte* $src
	 * @return \T|object
	 */
	public static function ReadUnaligned($src){}
	/**
	 * @param \System\Byte* $dst
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public static function WriteUnaligned($dst, $value){}
	private static function UnalignedMemcpy($dst, $src, $count){}
}