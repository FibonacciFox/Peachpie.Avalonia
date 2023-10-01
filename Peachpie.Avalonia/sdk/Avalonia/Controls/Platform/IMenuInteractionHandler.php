<?php
namespace Avalonia\Controls\Platform;
/**
 */
interface IMenuInteractionHandler
{
	/**
	 * @param \Avalonia\Controls\MenuBase $menu
	 */
	public function Attach($menu);
	/**
	 * @param \Avalonia\Controls\MenuBase $menu
	 */
	public function Detach($menu);
}
