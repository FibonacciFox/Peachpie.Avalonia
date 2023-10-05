<?php
namespace Avalonia\OpenGL\Controls;
/**
 */
class DxgiMutexOpenGlSwapChainImage extends \System\Object implements 
	\Avalonia\OpenGL\Controls\IGlSwapchainImage,
	\Avalonia\Rendering\ISwapchainImage,
	\System\IAsyncDisposable,
	\Avalonia\OpenGL\Controls\IGlTexture
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $TextureId;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $InternalFormat;
	/**
	 * @var \Avalonia\PixelSize
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\Threading\Tasks\Task
	 * @property
	 */
	public readonly $LastPresent;
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function DisposeAsync(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TextureId(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_InternalFormat(){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function get_LastPresent(){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginDraw(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Present(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
