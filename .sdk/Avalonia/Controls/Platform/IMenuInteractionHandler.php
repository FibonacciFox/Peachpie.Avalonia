<?php
namespace Avalonia\Controls\Platform;
interface IMenuInteractionHandler
{

	/**
	 * @param \Avalonia\Controls\MenuBase $menu
	 * @return \System\Void|void
	 */
	public function Attach($menu);
	/**
	 * @param \Avalonia\Controls\MenuBase $menu
	 * @return \System\Void|void
	 */
	public function Detach($menu);
}