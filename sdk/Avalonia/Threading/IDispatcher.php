<?php
namespace Avalonia\Threading;
/**
 */
interface IDispatcher
{
	/**
	 */
	public function CheckAccess();
	/**
	 */
	public function VerifyAccess();
	/**
	 * @param \System\Action $action
	 * @param \Avalonia\Threading\DispatcherPriority $priority
	 */
	public function Post($action, $priority);
}
