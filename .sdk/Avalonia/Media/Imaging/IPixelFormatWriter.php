<?php
namespace Avalonia\Media\Imaging;
interface IPixelFormatWriter
{

	/**
	 * @param \Avalonia\Media\Imaging\Rgba8888Pixel $pixel
	 * @return \System\Void|void
	 */
	public function WriteNext($pixel);
	/**
	 * @param \System\IntPtr $address
	 * @return \System\Void|void
	 */
	public function Reset($address);
}