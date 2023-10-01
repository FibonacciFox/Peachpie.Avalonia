<?php
namespace Avalonia\Media;
/**
 */
interface IAffectsRender
{
	/**
	 * @param \System\EventHandler $value
	 */
	public function add_Invalidated($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function remove_Invalidated($value);
}
