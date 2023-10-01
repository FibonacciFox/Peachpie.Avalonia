<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateSwapChainForCompositionDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pDevice
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \System\Void* $pRestrictToOutput
	 * @param \System\Void** $ppSwapChain
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pDevice, $pDesc, $pRestrictToOutput, $ppSwapChain){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $pDevice
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \System\Void* $pRestrictToOutput
	 * @param \System\Void** $ppSwapChain
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pDevice, $pDesc, $pRestrictToOutput, $ppSwapChain, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Int32|int
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
