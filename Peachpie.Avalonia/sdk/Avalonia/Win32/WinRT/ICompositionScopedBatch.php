<?php
namespace Avalonia\Win32\WinRT;
/**
 */
interface ICompositionScopedBatch
{
	/**
	 */
	public function get_IsActive();
	/**
	 */
	public function get_IsEnded();
	/**
	 */
	public function End();
	/**
	 */
	public function Resume();
	/**
	 */
	public function Suspend();
	/**
	 * @param \System\Void* $handler
	 */
	public function AddCompleted($handler);
	/**
	 * @param \System\Int32|int $token
	 */
	public function RemoveCompleted($token);
}
