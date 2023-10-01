<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateRasterizerStateDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pRasterizerDesc
	 * @param \System\Void** $ppRasterizerState
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pRasterizerDesc, $ppRasterizerState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pRasterizerDesc
	 * @param \System\Void** $ppRasterizerState
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pRasterizerDesc, $ppRasterizerState, $callback, $object){}
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
