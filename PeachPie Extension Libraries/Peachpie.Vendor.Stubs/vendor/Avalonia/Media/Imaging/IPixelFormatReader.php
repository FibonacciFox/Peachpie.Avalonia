<?php
namespace Avalonia\Media\Imaging;
interface IPixelFormatReader
{

	/**
	 * @return \Avalonia\Media\Imaging\Rgba8888Pixel
	 */
	public function ReadNext();
	/**
	 * @param \System\IntPtr $address
	 * @return \System\Void|void
	 */
	public function Reset($address);
}