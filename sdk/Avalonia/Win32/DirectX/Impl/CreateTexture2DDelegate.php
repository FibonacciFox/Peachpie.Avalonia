<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreateTexture2DDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $_target;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $_methodBase;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $_methodPtr;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $_methodPtrAux;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Target;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $Method;
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\D3D11_TEXTURE2D_DESC* $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @param \System\Void** $ppTexture2D
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pDesc, $pInitialData, $ppTexture2D){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\D3D11_TEXTURE2D_DESC* $pDesc
	 * @param \System\IntPtr $pInitialData
	 * @param \System\Void** $ppTexture2D
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pDesc, $pInitialData, $ppTexture2D, $callback, $object){}
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
