<?php
namespace Avalonia\Controls\ApplicationLifetimes;
/**
 */
interface IControlledApplicationLifetime
{
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_Startup($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_Startup($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_Exit($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_Exit($value);
	/**
	 * @param \System\Int32|int $exitCode
	 */
	public function Shutdown($exitCode);
}
