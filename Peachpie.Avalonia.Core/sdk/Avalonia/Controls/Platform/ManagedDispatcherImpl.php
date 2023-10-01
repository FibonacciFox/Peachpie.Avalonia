<?php
namespace Avalonia\Controls\Platform;
/**
 */
class ManagedDispatcherImpl extends \System\Object implements 
	\Avalonia\Threading\IControlledDispatcherImpl,
	\Avalonia\Threading\IDispatcherImplWithPendingInput,
	\Avalonia\Threading\IDispatcherImpl
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_CurrentThreadIsLoopThread(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Signal(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function add_Signaled($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function remove_Signaled($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function add_Timer($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	public  function remove_Timer($value){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Now(){}
	/**
	 * @param \System\Nullable_1 $dueTimeInMs
	 * @return \System\Void|void
	 */
	public  function UpdateTimer($dueTimeInMs){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanQueryPendingInput(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasPendingInput(){}
	/**
	 * @param \System\Threading\CancellationToken $token
	 * @return \System\Void|void
	 */
	public  function RunLoop($token){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
