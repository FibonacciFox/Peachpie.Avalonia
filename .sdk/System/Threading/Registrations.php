<?php
namespace System\Threading;
final class Registrations extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Threading\CancellationTokenSource
	 */
	public $Source;
	/**
	 * @field
	 * @var \System\Threading\CancellationTokenSource+CallbackNode
	 */
	public $Callbacks;
	/**
	 * @field
	 * @var \System\Threading\CancellationTokenSource+CallbackNode
	 */
	public $FreeNodeList;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	public $NextAvailableId;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	public $ExecutingCallbackId;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $ThreadIDExecutingCallbacks;
	private function Recycle($node){}
	/**
	 * @param \System\Int64|int $id
	 * @param \System\Threading\CancellationTokenSource+CallbackNode $node
	 * @return \System\Boolean|bool
	 */
	public function Unregister($id, $node){}
	/**
	 * @return \System\Void|void
	 */
	public function UnregisterAll(){}
	/**
	 * @param \System\Int64|int $id
	 * @return \System\Void|void
	 */
	public function WaitForCallbackToComplete($id){}
	/**
	 * @param \System\Int64|int $id
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function WaitForCallbackToCompleteAsync($id){}
	/**
	 * @return \System\Void|void
	 */
	public function EnterLock(){}
	/**
	 * @return \System\Void|void
	 */
	public function ExitLock(){}
	/**
	 * @param \System\Threading\CancellationTokenSource $source
	 */
	public function __construct($source){}
}