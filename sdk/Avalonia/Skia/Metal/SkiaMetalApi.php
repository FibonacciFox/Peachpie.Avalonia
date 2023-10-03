<?php
namespace Avalonia\Skia\Metal;
/**
 */
class SkiaMetalApi extends \System\Object
{
	/**
	 * @param \System\IntPtr $device
	 * @param \System\IntPtr $queue
	 * @param \SkiaSharp\GRContextOptions $options
	 * @return \SkiaSharp\GRContext
	 */
	public  function CreateContext($device, $queue, $options){}
	/**
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\Int32|int $samples
	 * @param \System\IntPtr $texture
	 * @return \SkiaSharp\GRBackendRenderTarget
	 */
	public  function CreateBackendRenderTarget($width, $height, $samples, $texture){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
