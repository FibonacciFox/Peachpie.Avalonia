<?php
namespace Avalonia\Media\Imaging;
/**
 */
interface IPixelFormatReader
{
	/**
	 */
	public function ReadNext();
	/**
	 * @param \System\IntPtr $address
	 */
	public function Reset($address);
}
