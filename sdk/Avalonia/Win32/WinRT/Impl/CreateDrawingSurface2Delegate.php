<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 */
class CreateDrawingSurface2Delegate extends \System\MulticastDelegate implements 
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
	 * @param \Avalonia\Win32\Interop\SIZE $sizePixels
	 * @param \Avalonia\Win32\WinRT\DirectXPixelFormat $pixelFormat
	 * @param \Avalonia\Win32\WinRT\DirectXAlphaMode $alphaMode
	 * @param \System\Void** $result
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $sizePixels, $pixelFormat, $alphaMode, $result){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\Interop\SIZE $sizePixels
	 * @param \Avalonia\Win32\WinRT\DirectXPixelFormat $pixelFormat
	 * @param \Avalonia\Win32\WinRT\DirectXAlphaMode $alphaMode
	 * @param \System\Void** $result
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $sizePixels, $pixelFormat, $alphaMode, $result, $callback, $object){}
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
