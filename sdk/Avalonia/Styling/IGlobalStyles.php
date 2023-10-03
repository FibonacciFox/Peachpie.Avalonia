<?php
namespace Avalonia\Styling;
/**
 */
interface IGlobalStyles
{
	/**
	 * @param \System\Action_1 $value
	 */
	public function add_GlobalStylesAdded($value);
	/**
	 * @param \System\Action_1 $value
	 */
	public function remove_GlobalStylesAdded($value);
	/**
	 * @param \System\Action_1 $value
	 */
	public function add_GlobalStylesRemoved($value);
	/**
	 * @param \System\Action_1 $value
	 */
	public function remove_GlobalStylesRemoved($value);
}
