<?php
namespace Avalonia\Animation;
/**
 */
interface IClock
{
	/**
	 */
	public function get_PlayState();
	/**
	 * @param \Avalonia\Animation\PlayState $value
	 */
	public function set_PlayState($value);
}
