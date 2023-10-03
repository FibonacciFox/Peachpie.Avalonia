<?php
namespace Avalonia;
/**
 */
class AppMainDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @param \Avalonia\Application $app
	 * @param \System\String[] $args
	 * @return \System\Void|void
	 */
	public  function Invoke($app, $args){}
	/**
	 * @param \Avalonia\Application $app
	 * @param \System\String[] $args
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($app, $args, $callback, $object){}
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
