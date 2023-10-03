<?php
namespace Avalonia\Media;
/**
 */
interface IMutableTransform
{
	/**
	 * @param \System\EventHandler $value
	 */
	public function add_Changed($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function remove_Changed($value);
}
