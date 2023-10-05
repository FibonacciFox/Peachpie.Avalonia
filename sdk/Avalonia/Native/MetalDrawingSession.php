<?php
namespace Avalonia\Native;
/**
 */
class MetalDrawingSession extends \System\Object implements 
	\Avalonia\Metal\IMetalPlatformSurfaceRenderingSession,
	\System\IDisposable
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Texture;
	/**
	 * @var \Avalonia\PixelSize
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Scaling;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsYFlipped;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Texture(){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsYFlipped(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
