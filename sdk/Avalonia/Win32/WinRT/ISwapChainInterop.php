<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ISwapChainInterop
{
	/**
	 * @param \MicroCom\Runtime\IUnknown $swapChain
	 */
	public function SetSwapChain($swapChain);
}
