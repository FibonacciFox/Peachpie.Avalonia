<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateSurfaceDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_SURFACE_DESC* $pDesc
	 * @param \System\UInt16 $NumSurfaces
	 * @param \System\UInt32 $Usage
	 * @param \System\Void** $pSharedResource
	 * @param \System\Void** $ppSurface
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pDesc, $NumSurfaces, $Usage, $pSharedResource, $ppSurface){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_SURFACE_DESC* $pDesc
	 * @param \System\UInt16 $NumSurfaces
	 * @param \System\UInt32 $Usage
	 * @param \System\Void** $pSharedResource
	 * @param \System\Void** $ppSurface
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pDesc, $NumSurfaces, $Usage, $pSharedResource, $ppSurface, $callback, $object){}
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
