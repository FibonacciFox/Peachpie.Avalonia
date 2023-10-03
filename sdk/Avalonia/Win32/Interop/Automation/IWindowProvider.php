<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IWindowProvider
{
	/**
	 * @param \Avalonia\Win32\Interop\Automation\WindowVisualState $state
	 */
	public function SetVisualState($state);
	/**
	 */
	public function Close();
	/**
	 * @param \System\Int32|int $milliseconds
	 */
	public function WaitForInputIdle($milliseconds);
	/**
	 */
	public function get_Maximizable();
	/**
	 */
	public function get_Minimizable();
	/**
	 */
	public function get_IsModal();
	/**
	 */
	public function get_VisualState();
	/**
	 */
	public function get_InteractionState();
	/**
	 */
	public function get_IsTopmost();
}
