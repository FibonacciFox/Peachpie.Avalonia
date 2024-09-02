<?php
namespace Avalonia\Media\Imaging;
final class Gray4PixelFormatWriter extends \System\ValueType implements
	\Avalonia\Media\Imaging\IPixelFormatWriter
{

	/**
	 * @param \Avalonia\Media\Imaging\Rgba8888Pixel $pixel
	 * @return \System\Void|void
	 */
	public function WriteNext($pixel){}
	/**
	 * @param \System\IntPtr $address
	 * @return \System\Void|void
	 */
	public function Reset($address){}
}