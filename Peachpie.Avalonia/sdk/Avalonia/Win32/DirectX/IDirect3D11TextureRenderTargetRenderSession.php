<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDirect3D11TextureRenderTargetRenderSession
{
	/**
	 */
	public function get_D3D11Texture2D();
	/**
	 */
	public function get_Size();
	/**
	 */
	public function get_Offset();
	/**
	 */
	public function get_Scaling();
}
