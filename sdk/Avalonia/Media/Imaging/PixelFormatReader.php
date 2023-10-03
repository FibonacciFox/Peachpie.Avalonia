<?php
namespace Avalonia\Media\Imaging;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PixelFormatReaderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Transcode_1($dst, $src, $size, $strideSrc, $strideDst, $format){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Transcode_2($dst, $src, $size, $strideSrc, $strideDst){}
}
/**
 */
class PixelFormatReader extends \System\Object
{
	/**
	 * @uses PixelFormatReaderMethodsOverride::Transcode_1 ($dst, $src, $size, $strideSrc, $strideDst, $format)
	 * @uses PixelFormatReaderMethodsOverride::Transcode_2 ($dst, $src, $size, $strideSrc, $strideDst)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Transcode(mixed ...$args){}
	/**
	 * @param \Avalonia\Platform\PixelFormat $format
	 * @return \System\Boolean
	 */
	public static function SupportsFormat($format){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
