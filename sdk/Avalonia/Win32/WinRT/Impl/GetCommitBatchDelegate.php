<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class GetCommitBatchDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\WinRT\CompositionBatchTypes $batchType
	 * @param \System\Void** $result
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $batchType, $result){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\WinRT\CompositionBatchTypes $batchType
	 * @param \System\Void** $result
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $batchType, $result, $callback, $object){}
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
