<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateSamplerStateDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pSamplerDesc
	 * @param \System\Void** $ppSamplerState
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pSamplerDesc, $ppSamplerState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pSamplerDesc
	 * @param \System\Void** $ppSamplerState
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pSamplerDesc, $ppSamplerState, $callback, $object){}
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
