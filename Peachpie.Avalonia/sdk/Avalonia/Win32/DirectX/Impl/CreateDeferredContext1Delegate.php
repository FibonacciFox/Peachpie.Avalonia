<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateDeferredContext1Delegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $ContextFlags
	 * @param \System\Void** $ppDeferredContext
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $ContextFlags, $ppDeferredContext){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $ContextFlags
	 * @param \System\Void** $ppDeferredContext
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $ContextFlags, $ppDeferredContext, $callback, $object){}
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
