<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class ResizeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\Double|double $width
	 * @param \System\Double|double $height
	 * @param \Avalonia\Native\Interop\AvnPlatformResizeReason $reason
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $width, $height, $reason){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Double|double $width
	 * @param \System\Double|double $height
	 * @param \Avalonia\Native\Interop\AvnPlatformResizeReason $reason
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $width, $height, $reason, $callback, $object){}
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
