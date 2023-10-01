<?php
namespace Avalonia\Threading;
/**
 */
interface IDispatcherImplWithExplicitBackgroundProcessing
{
	/**
	 * @param \System\Action $value
	 */
	public function add_ReadyForBackgroundProcessing($value);
	/**
	 * @param \System\Action $value
	 */
	public function remove_ReadyForBackgroundProcessing($value);
	/**
	 */
	public function RequestBackgroundProcessing();
}
