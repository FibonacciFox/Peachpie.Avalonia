<?php
namespace Avalonia\Controls\ApplicationLifetimes;
/**
 */
interface IClassicDesktopStyleApplicationLifetime
{
	/**
	 * @param \System\Int32|int $exitCode
	 */
	public function TryShutdown($exitCode);
	/**
	 */
	public function get_Args();
	/**
	 */
	public function get_ShutdownMode();
	/**
	 * @param \Avalonia\Controls\ShutdownMode $value
	 */
	public function set_ShutdownMode($value);
	/**
	 */
	public function get_MainWindow();
	/**
	 * @param \Avalonia\Controls\Window $value
	 */
	public function set_MainWindow($value);
	/**
	 */
	public function get_Windows();
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_ShutdownRequested($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_ShutdownRequested($value);
}
