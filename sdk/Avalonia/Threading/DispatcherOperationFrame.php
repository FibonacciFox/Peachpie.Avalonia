<?php
namespace Avalonia\Threading;
/**
 */
class DispatcherOperationFrame extends \Avalonia\Threading\DispatcherFrame
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Exit(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnCompletedOrAborted($sender, $e){}
}
