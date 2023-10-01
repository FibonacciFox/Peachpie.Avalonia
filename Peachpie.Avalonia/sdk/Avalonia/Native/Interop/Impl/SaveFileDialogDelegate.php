<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class SaveFileDialogDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $parentWindowHandle
	 * @param \System\Void* $events
	 * @param \System\Byte* $title
	 * @param \System\Byte* $initialDirectory
	 * @param \System\Byte* $initialFile
	 * @param \System\Byte* $filters
	 * @return \System\Void|void
	 */
	public  function Invoke($this, $parentWindowHandle, $events, $title, $initialDirectory, $initialFile, $filters){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $parentWindowHandle
	 * @param \System\Void* $events
	 * @param \System\Byte* $title
	 * @param \System\Byte* $initialDirectory
	 * @param \System\Byte* $initialFile
	 * @param \System\Byte* $filters
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $parentWindowHandle, $events, $title, $initialDirectory, $initialFile, $filters, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
