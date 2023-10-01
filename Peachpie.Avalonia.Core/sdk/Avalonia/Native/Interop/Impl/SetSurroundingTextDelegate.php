<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class SetSurroundingTextDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $text
	 * @param \System\Int32|int $anchorOffset
	 * @param \System\Int32|int $cursorOffset
	 * @return \System\Void|void
	 */
	public  function Invoke($this, $text, $anchorOffset, $cursorOffset){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $text
	 * @param \System\Int32|int $anchorOffset
	 * @param \System\Int32|int $cursorOffset
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $text, $anchorOffset, $cursorOffset, $callback, $object){}
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
