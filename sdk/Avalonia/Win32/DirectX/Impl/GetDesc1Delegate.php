<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class GetDesc1Delegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pDesc){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_SWAP_CHAIN_DESC1* $pDesc
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pDesc, $callback, $object){}
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