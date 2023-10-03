<?php
namespace Avalonia\Threading;
/**
 */
class PriorityChain extends \System\Object
{
	/**
	 * @return \Avalonia\Threading\DispatcherPriority
	 */
	public  function get_Priority(){}
	/**
	 * @param \Avalonia\Threading\DispatcherPriority $value
	 * @return \System\Void|void
	 */
	public  function set_Priority($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Count($value){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	public  function get_Head(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $value
	 * @return \System\Void|void
	 */
	public  function set_Head($value){}
	/**
	 * @return \Avalonia\Threading\DispatcherOperation
	 */
	public  function get_Tail(){}
	/**
	 * @param \Avalonia\Threading\DispatcherOperation $value
	 * @return \System\Void|void
	 */
	public  function set_Tail($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
