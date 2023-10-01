<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateQueryDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pQueryDesc
	 * @param \System\Void** $ppQuery
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pQueryDesc, $ppQuery){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pQueryDesc
	 * @param \System\Void** $ppQuery
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pQueryDesc, $ppQuery, $callback, $object){}
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
