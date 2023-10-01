<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class GetDisplayModeListDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $EnumFormat
	 * @param \System\UInt16 $Flags
	 * @param \System\UInt16* $pNumModes
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pDesc
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $EnumFormat, $Flags, $pNumModes, $pDesc){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_FORMAT $EnumFormat
	 * @param \System\UInt16 $Flags
	 * @param \System\UInt16* $pNumModes
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pDesc
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $EnumFormat, $Flags, $pNumModes, $pDesc, $callback, $object){}
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
