<?php
namespace Avalonia\Platform;
/**
 */
interface ITrayIconImpl
{
	/**
	 * @param \Avalonia\Platform\IWindowIconImpl $icon
	 */
	public function SetIcon($icon);
	/**
	 * @param \System\String|string $text
	 */
	public function SetToolTipText($text);
	/**
	 * @param \System\Boolean $visible
	 */
	public function SetIsVisible($visible);
	/**
	 */
	public function get_MenuExporter();
	/**
	 */
	public function get_OnClicked();
	/**
	 * @param \System\Action $value
	 */
	public function set_OnClicked($value);
}
