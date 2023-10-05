<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class FindClosestMatchingModeDelegate extends \System\MulticastDelegate implements 
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
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pModeToMatch
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pClosestMatch
	 * @param \System\Void* $pConcernedDevice
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pModeToMatch, $pClosestMatch, $pConcernedDevice){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pModeToMatch
	 * @param \Avalonia\Win32\DirectX\DXGI_MODE_DESC* $pClosestMatch
	 * @param \System\Void* $pConcernedDevice
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pModeToMatch, $pClosestMatch, $pConcernedDevice, $callback, $object){}
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
