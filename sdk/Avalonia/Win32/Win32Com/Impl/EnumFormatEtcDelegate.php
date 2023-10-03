<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 */
class EnumFormatEtcDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $dwDirection
	 * @param \System\Void** $ppenumFormatEtc
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $dwDirection, $ppenumFormatEtc){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $dwDirection
	 * @param \System\Void** $ppenumFormatEtc
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $dwDirection, $ppenumFormatEtc, $callback, $object){}
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
