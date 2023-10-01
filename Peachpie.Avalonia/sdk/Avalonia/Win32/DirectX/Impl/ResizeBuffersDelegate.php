<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class ResizeBuffersDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $BufferCount
	 * @param \System\UInt16 $Width
	 * @param \System\UInt16 $Height
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $NewFormat
	 * @param \System\UInt16 $SwapChainFlags
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $BufferCount, $Width, $Height, $NewFormat, $SwapChainFlags){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16 $BufferCount
	 * @param \System\UInt16 $Width
	 * @param \System\UInt16 $Height
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $NewFormat
	 * @param \System\UInt16 $SwapChainFlags
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $BufferCount, $Width, $Height, $NewFormat, $SwapChainFlags, $callback, $object){}
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
