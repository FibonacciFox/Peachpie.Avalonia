<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class Session extends \System\Object implements 
	\Avalonia\Win32\DirectX\IDirect3D11TextureRenderTargetRenderSession,
	\System\IDisposable
{
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $D3D11Texture2D;
	/**
	 * @var \Avalonia\PixelSize
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \Avalonia\PixelPoint
	 * @property
	 */
	public readonly $Offset;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Scaling;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_D3D11Texture2D(){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	public  function get_Offset(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
