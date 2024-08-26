<?php
namespace Avalonia\Platform;
interface ITrayIconImpl
{

	/**
	 * @param \Avalonia\Platform\IWindowIconImpl $icon
	 * @return \System\Void|void
	 */
	public function SetIcon($icon);
	/**
	 * @param \System\String|string $text
	 * @return \System\Void|void
	 */
	public function SetToolTipText($text);
	/**
	 * @param \System\Boolean|bool $visible
	 * @return \System\Void|void
	 */
	public function SetIsVisible($visible);
}