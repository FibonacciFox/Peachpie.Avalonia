<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class QueryContinueDragDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $fEscapePressed
	 * @param \System\Int32|int $grfKeyState
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $fEscapePressed, $grfKeyState){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $fEscapePressed
	 * @param \System\Int32|int $grfKeyState
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $fEscapePressed, $grfKeyState, $callback, $object){}
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
