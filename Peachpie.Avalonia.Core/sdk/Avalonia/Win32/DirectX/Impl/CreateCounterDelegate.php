<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateCounterDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pCounterDesc
	 * @param \System\Void** $ppCounter
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pCounterDesc, $ppCounter){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pCounterDesc
	 * @param \System\Void** $ppCounter
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pCounterDesc, $ppCounter, $callback, $object){}
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
