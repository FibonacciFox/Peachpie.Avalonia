<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class DragOverDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $grfKeyState, $pt, $pdwEffect){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $grfKeyState
	 * @param \Avalonia\Win32\Interop\POINT $pt
	 * @param \Avalonia\Win32\Win32Com\DropEffect* $pdwEffect
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $grfKeyState, $pt, $pdwEffect, $callback, $object){}
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
