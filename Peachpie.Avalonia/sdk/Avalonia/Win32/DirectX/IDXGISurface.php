<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGISurface
{
	/**
	 */
	public function get_Desc();
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_MAPPED_RECT* $pLockedRect
	 * @param \System\UInt16 $MapFlags
	 */
	public function Map($pLockedRect, $MapFlags);
	/**
	 */
	public function Unmap();
}
