<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateDepthStencilStateDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDepthStencilDesc
	 * @param \System\Void** $ppDepthStencilState
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pDepthStencilDesc, $ppDepthStencilState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDepthStencilDesc
	 * @param \System\Void** $ppDepthStencilState
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pDepthStencilDesc, $ppDepthStencilState, $callback, $object){}
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