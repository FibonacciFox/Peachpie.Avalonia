<?php
namespace Avalonia\X11;
/**
 */
class SmcErrorHandler extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\Boolean $swap
	 * @param \System\Int32|int $offendingMinorOpcode
	 * @param \System\UIntPtr $offendingSequence
	 * @param \System\Int32|int $errorClass
	 * @param \System\Int32|int $severity
	 * @param \System\IntPtr $values
	 * @return \System\Void|void
	 */
	public  function Invoke($smcConn, $swap, $offendingMinorOpcode, $offendingSequence, $errorClass, $severity, $values){}
	/**
	 * @param \System\IntPtr $smcConn
	 * @param \System\Boolean $swap
	 * @param \System\Int32|int $offendingMinorOpcode
	 * @param \System\UIntPtr $offendingSequence
	 * @param \System\Int32|int $errorClass
	 * @param \System\Int32|int $severity
	 * @param \System\IntPtr $values
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($smcConn, $swap, $offendingMinorOpcode, $offendingSequence, $errorClass, $severity, $values, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Void|void
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
