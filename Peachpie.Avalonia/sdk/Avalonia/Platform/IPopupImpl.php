<?php
namespace Avalonia\Platform;
/**
 */
interface IPopupImpl
{
	/**
	 */
	public function get_PopupPositioner();
	/**
	 * @param \System\Boolean $enabled
	 */
	public function SetWindowManagerAddShadowHint($enabled);
}
