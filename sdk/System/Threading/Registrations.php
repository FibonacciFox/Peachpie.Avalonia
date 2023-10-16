<?php
namespace System\Threading;
/**
 */
class Registrations extends \System\Object
{
	/**
	 * @var \System\Threading\CancellationTokenSource
	 * @field
	 */
	public readonly $Source;
	/**
	 * @var \System\Threading\CancellationTokenSource+CallbackNode
	 * @field
	 */
	public $Callbacks;
	/**
	 * @var \System\Threading\CancellationTokenSource+CallbackNode
	 * @field
	 */
	public $FreeNodeList;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $NextAvailableId;
	/**
	 * @var \System\Int64
	 * @field
	 */
	public $ExecutingCallbackId;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $ThreadIDExecutingCallbacks;
	/**
	 * @param \System\Threading\CallbackNode $node
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Recycle($node){}
	/**
	 * @param \System\Int64|int $id
	 * @param \System\Threading\CallbackNode $node
	 * @return \System\Boolean
	 */
	public  function Unregister($id, $node){}
	/**
	 * @return \System\Void|void
	 */
	public  function UnregisterAll(){}
	/**
	 * @param \System\Int64|int $id
	 * @return \System\Void|void
	 */
	public  function WaitForCallbackToComplete($id){}
	/**
	 * @param \System\Int64|int $id
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function WaitForCallbackToCompleteAsync($id){}
	/**
	 * @return \System\Void|void
	 */
	public  function EnterLock(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ExitLock(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
