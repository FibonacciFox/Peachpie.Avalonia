<?php
namespace Avalonia\Win32\WinRT\Composition;
/**
 */
class WinUiCompositedWindowRenderTarget extends \System\Object implements 
	\Avalonia\Win32\DirectX\IDirect3D11TextureRenderTarget,
	\System\IDisposable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCorrupted;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCorrupted(){}
	/**
	 * @return \Avalonia\Win32\DirectX\IDirect3D11TextureRenderTargetRenderSession
	 */
	public  function BeginDraw(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
