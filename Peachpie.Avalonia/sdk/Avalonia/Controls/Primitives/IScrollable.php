<?php
namespace Avalonia\Controls\Primitives;
/**
 */
interface IScrollable
{
	/**
	 */
	public function get_Extent();
	/**
	 */
	public function get_Offset();
	/**
	 * @param \Avalonia\Vector $value
	 */
	public function set_Offset($value);
	/**
	 */
	public function get_Viewport();
}
