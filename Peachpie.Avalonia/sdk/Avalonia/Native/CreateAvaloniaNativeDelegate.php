<?php
namespace Avalonia\Native;
/**
 */
class CreateAvaloniaNativeDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @return \System\IntPtr
	 */
	public  function Invoke(){}
	/**
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\IntPtr
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
