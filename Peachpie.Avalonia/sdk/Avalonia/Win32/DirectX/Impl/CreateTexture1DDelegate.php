<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateTexture1DDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @param \System\Void** $ppTexture1D
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pDesc, $pInitialData, $ppTexture1D){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @param \System\Void** $ppTexture1D
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pDesc, $pInitialData, $ppTexture1D, $callback, $object){}
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
