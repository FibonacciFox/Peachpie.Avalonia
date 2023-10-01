<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AutoCompleteFilterPredicate_1 extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \System\String|string $search
	 * @param \Avalonia\Controls\T $item
	 * @return \System\Boolean
	 */
	public  function Invoke($search, $item){}
	/**
	 * @param \System\String|string $search
	 * @param \Avalonia\Controls\T $item
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($search, $item, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Boolean
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}
