<?php
namespace Avalonia\Win32\DirectX;
/**
 */
interface IDXGIKeyedMutex
{
	/**
	 * @param \System\UInt64 $Key
	 * @param \System\UInt32 $dwMilliseconds
	 */
	public function AcquireSync($Key, $dwMilliseconds);
	/**
	 * @param \System\UInt64 $Key
	 */
	public function ReleaseSync($Key);
}
