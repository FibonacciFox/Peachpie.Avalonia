<?php
namespace Avalonia\Skia\Helpers;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImageSavingHelperMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SaveImage_1($image, $fileName, $quality){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function SaveImage_2($image, $stream, $quality){}
}
/**
 */
class ImageSavingHelper extends \System\Object
{
	/**
	 * @uses ImageSavingHelperMethodsOverride::SaveImage_1 ($image, $fileName, $quality)
	 * @uses ImageSavingHelperMethodsOverride::SaveImage_2 ($image, $stream, $quality)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SaveImage(mixed ...$args){}
	/**
	 * @param \SkiaSharp\SKPicture $picture
	 * @param \System\Single $scale
	 * @param \System\String|string $path
	 * @return \System\Void|void
	 */
	protected static function SavePicture($picture, $scale, $path){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
