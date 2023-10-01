<?php
namespace Avalonia\Controls;
/**
 */
interface IContentControl
{
	/**
	 */
	public function get_Content();
	/**
	 * @param \System\Object|object $value
	 */
	public function set_Content($value);
	/**
	 */
	public function get_ContentTemplate();
	/**
	 * @param \Avalonia\Controls\Templates\IDataTemplate $value
	 */
	public function set_ContentTemplate($value);
	/**
	 */
	public function get_HorizontalContentAlignment();
	/**
	 * @param \Avalonia\Layout\HorizontalAlignment $value
	 */
	public function set_HorizontalContentAlignment($value);
	/**
	 */
	public function get_VerticalContentAlignment();
	/**
	 * @param \Avalonia\Layout\VerticalAlignment $value
	 */
	public function set_VerticalContentAlignment($value);
}
