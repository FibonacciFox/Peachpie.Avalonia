<?php
namespace Avalonia\Utilities;
/**
 */
class CallerDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \Avalonia\Utilities\TSubscriber $s
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Utilities\T $args
	 * @return \System\Void|void
	 */
	public  function Invoke($s, $sender, $args){}
	/**
	 * @param \Avalonia\Utilities\TSubscriber $s
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Utilities\T $args
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($s, $sender, $args, $callback, $object){}
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
