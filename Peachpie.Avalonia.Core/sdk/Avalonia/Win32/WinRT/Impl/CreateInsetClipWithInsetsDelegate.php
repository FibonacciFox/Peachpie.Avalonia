<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class CreateInsetClipWithInsetsDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Single $leftInset
	 * @param \System\Single $topInset
	 * @param \System\Single $rightInset
	 * @param \System\Single $bottomInset
	 * @param \System\Void** $result
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $leftInset, $topInset, $rightInset, $bottomInset, $result){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Single $leftInset
	 * @param \System\Single $topInset
	 * @param \System\Single $rightInset
	 * @param \System\Single $bottomInset
	 * @param \System\Void** $result
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $leftInset, $topInset, $rightInset, $bottomInset, $result, $callback, $object){}
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
