<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CheckCounterDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pType
	 * @param \System\IntPtr $pActiveCounters
	 * @param \System\IntPtr $szName
	 * @param \System\UInt16* $pNameLength
	 * @param \System\IntPtr $szUnits
	 * @param \System\UInt16* $pUnitsLength
	 * @param \System\IntPtr $szDescription
	 * @param \System\UInt16* $pDescriptionLength
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pDesc, $pType, $pActiveCounters, $szName, $pNameLength, $szUnits, $pUnitsLength, $szDescription, $pDescriptionLength){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pDesc
	 * @param \System\IntPtr $pType
	 * @param \System\IntPtr $pActiveCounters
	 * @param \System\IntPtr $szName
	 * @param \System\UInt16* $pNameLength
	 * @param \System\IntPtr $szUnits
	 * @param \System\UInt16* $pUnitsLength
	 * @param \System\IntPtr $szDescription
	 * @param \System\UInt16* $pDescriptionLength
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pDesc, $pType, $pActiveCounters, $szName, $pNameLength, $szUnits, $pUnitsLength, $szDescription, $pDescriptionLength, $callback, $object){}
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
