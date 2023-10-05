<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CheckFeatureSupportDelegate extends \System\MulticastDelegate implements 
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
	 * @param \Avalonia\Win32\DirectX\D3D11_FEATURE $Feature
	 * @param \System\Void* $pFeatureSupportData
	 * @param \System\UInt16 $FeatureSupportDataSize
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $Feature, $pFeatureSupportData, $FeatureSupportDataSize){}
	/**
	 * @param \System\Void* $this
	 * @param \Avalonia\Win32\DirectX\D3D11_FEATURE $Feature
	 * @param \System\Void* $pFeatureSupportData
	 * @param \System\UInt16 $FeatureSupportDataSize
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $Feature, $pFeatureSupportData, $FeatureSupportDataSize, $callback, $object){}
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
