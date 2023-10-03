<?php
namespace Avalonia\Threading;
/**
 */
interface IDispatcherImplWithPendingInput
{
	/**
	 */
	public function get_CanQueryPendingInput();
	/**
	 */
	public function get_HasPendingInput();
}
