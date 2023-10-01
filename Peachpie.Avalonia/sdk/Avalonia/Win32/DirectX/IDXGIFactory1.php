<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGIFactory1
{
	/**
	 * @param \System\UInt16 $Adapter
	 * @param \System\Void** $ppAdapter
	 */
	public function EnumAdapters1($Adapter, $ppAdapter);
	/**
	 */
	public function IsCurrent();
}
