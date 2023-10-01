<?php
namespace Avalonia\Controls\Platform;
/**
 */
interface ITopLevelNativeMenuExporter
{
	/**
	 */
	public function get_IsNativeMenuExported();
	/**
	 * @param \System\EventHandler $value
	 */
	public function add_OnIsNativeMenuExportedChanged($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function remove_OnIsNativeMenuExportedChanged($value);
}
