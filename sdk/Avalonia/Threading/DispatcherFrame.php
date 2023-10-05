<?php
namespace Avalonia\Threading;
/**
 */
class DispatcherFrame extends \System\Object
{
	/**
	 * @var \Avalonia\Threading\Dispatcher
	 * @property
	 */
	public readonly $Dispatcher;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Continue;
	/**
	 * @return \Avalonia\Threading\Dispatcher
	 */
	public  function get_Dispatcher(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Continue(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Continue($value){}
	/**
	 * @param \Avalonia\Threading\IControlledDispatcherImpl $impl
	 * @return \System\Void|void
	 */
	protected  function Run($impl){}
	/**
	 * @return \System\Void|void
	 */
	protected  function MaybeExitOnDispatcherRequest(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
