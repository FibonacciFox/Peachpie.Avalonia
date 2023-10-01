<?php
namespace Avalonia\Styling;
/**
 */
interface IThemeVariantHost
{
	/**
	 */
	public function get_ActualThemeVariant();
	/**
	 * @param \System\EventHandler $value
	 */
	public function add_ActualThemeVariantChanged($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function remove_ActualThemeVariantChanged($value);
}
