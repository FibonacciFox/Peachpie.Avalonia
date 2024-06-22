<?php
namespace Avalonia\Threading;
interface IDispatcher
{


	/**
	 * @return \System\Boolean|bool
	 */
	public function CheckAccess();
	/**
	 * @return \System\Void|void
	 */
	public function VerifyAccess();
	/**
	 * @param \System\Action $action
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 * @return \System\Void|void
	 */
	public function Post($action, $priority);
}