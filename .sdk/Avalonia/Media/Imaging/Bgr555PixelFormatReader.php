<?php
namespace Avalonia\Media\Imaging;
final class Bgr555PixelFormatReader extends \System\ValueType implements
	\Avalonia\Media\Imaging\IPixelFormatReader
{

	/**
	 * @return \Avalonia\Media\Imaging\Rgba8888Pixel
	 */
	public function ReadNext(){}
	/**
	 * @param \System\IntPtr $address
	 * @return \System\Void|void
	 */
	public function Reset($address){}
	private static function UnPack($value){}
}