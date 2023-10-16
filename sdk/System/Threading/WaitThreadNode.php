<?php
namespace System\Threading;
/**
 */
class WaitThreadNode extends \System\Object
{
	/**
	 * @var \System\Threading\PortableThreadPool+WaitThread
	 * @property
	 */
	public readonly $Thread;
	/**
	 * @var \System\Threading\PortableThreadPool+WaitThreadNode
	 * @property
	 */
	public $Next;
	/**
	 * @return \System\Threading\WaitThread
	 */
	public  function get_Thread(){}
	/**
	 * @return \System\Threading\WaitThreadNode
	 */
	public  function get_Next(){}
	/**
	 * @param \System\Threading\WaitThreadNode $value
	 * @return \System\Void|void
	 */
	public  function set_Next($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
