<?php
namespace Avalonia\Win32\OpenGl;
/**
 */
class WglChoosePixelFormatARBDelegate extends \System\MulticastDelegate implements 
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
	 * @param \System\IntPtr $hdc
	 * @param \System\Int32[] $piAttribIList
	 * @param \System\Single[] $pfAttribFList
	 * @param \System\Int32|int $nMaxFormats
	 * @param \System\Int32[] $piFormats
	 * @param \System\Int32& $nNumFormats
	 * @return \System\Boolean
	 */
	public  function Invoke($hdc, $piAttribIList, $pfAttribFList, $nMaxFormats, $piFormats, $nNumFormats){}
	/**
	 * @param \System\IntPtr $hdc
	 * @param \System\Int32[] $piAttribIList
	 * @param \System\Single[] $pfAttribFList
	 * @param \System\Int32|int $nMaxFormats
	 * @param \System\Int32[] $piFormats
	 * @param \System\Int32& $nNumFormats
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($hdc, $piAttribIList, $pfAttribFList, $nMaxFormats, $piFormats, $nNumFormats, $callback, $object){}
	/**
	 * @param \System\Int32& $nNumFormats
	 * @param \System\IAsyncResult $result
	 * @return \System\Boolean
	 */
	public  function EndInvoke($nNumFormats, $result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
