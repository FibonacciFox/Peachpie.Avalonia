<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class Session extends \System\Object implements 
	\Avalonia\Win32\DirectX\IDirect3D11TextureRenderTargetRenderSession,
	\System\IDisposable
{
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
