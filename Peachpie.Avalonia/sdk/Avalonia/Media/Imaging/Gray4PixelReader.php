<?php
namespace Avalonia\Media\Imaging;
/**
 */
class Gray4PixelReader extends \System\ValueType implements 
	\Avalonia\Media\Imaging\IPixelFormatReader
{
	/**
	 * @param \System\IntPtr $address
	 * @return \System\Void|void
	 */
	public  function Reset($address){}
	/**
	 * @return \Avalonia\Media\Imaging\Rgba8888Pixel
	 */
	public  function ReadNext(){}
}
