<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 */
class CreatePredicateDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pPredicateDesc
	 * @param \System\Void** $ppPredicate
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $pPredicateDesc, $ppPredicate){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr $pPredicateDesc
	 * @param \System\Void** $ppPredicate
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $pPredicateDesc, $ppPredicate, $callback, $object){}
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
