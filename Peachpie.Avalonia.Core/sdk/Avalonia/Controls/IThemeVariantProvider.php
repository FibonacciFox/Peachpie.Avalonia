<?php
namespace Avalonia\Controls;
/**
 */
interface IThemeVariantProvider
{
	/**
	 */
	public function get_Key();
	/**
	 * @param \Avalonia\Styling\ThemeVariant $value
	 */
	public function set_Key($value);
}
