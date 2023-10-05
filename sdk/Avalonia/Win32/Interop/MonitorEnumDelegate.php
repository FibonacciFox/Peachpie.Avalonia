<?php
namespace Avalonia\Win32\Interop;
/**
 */
class MonitorEnumDelegate extends \System\MulticastDelegate implements 
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
	 * @param \System\IntPtr $hMonitor
	 * @param \System\IntPtr $hdcMonitor
	 * @param \Avalonia\Rect& $lprcMonitor
	 * @param \System\IntPtr $dwData
	 * @return \System\Boolean
	 */
	public  function Invoke($hMonitor, $hdcMonitor, $lprcMonitor, $dwData){}
	/**
	 * @param \System\IntPtr $hMonitor
	 * @param \System\IntPtr $hdcMonitor
	 * @param \Avalonia\Rect& $lprcMonitor
	 * @param \System\IntPtr $dwData
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($hMonitor, $hdcMonitor, $lprcMonitor, $dwData, $callback, $object){}
	/**
	 * @param \Avalonia\Rect& $lprcMonitor
	 * @param \System\IAsyncResult $result
	 * @return \System\Boolean
	 */
	public  function EndInvoke($lprcMonitor, $result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
