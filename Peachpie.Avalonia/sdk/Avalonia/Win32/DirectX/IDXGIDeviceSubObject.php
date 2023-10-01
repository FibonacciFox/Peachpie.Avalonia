<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGIDeviceSubObject
{
	/**
	 * @param \System\Guid* $riid
	 */
	public function GetDevice($riid);
}
