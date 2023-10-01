<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CheckMultisampleQualityLevelsDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $Format
	 * @param \System\UInt16 $SampleCount
	 * @param \System\UInt16* $pNumQualityLevels
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $Format, $SampleCount, $pNumQualityLevels){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $Format
	 * @param \System\UInt16 $SampleCount
	 * @param \System\UInt16* $pNumQualityLevels
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $Format, $SampleCount, $pNumQualityLevels, $callback, $object){}
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
