<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
interface IPopupPositioner
{


	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerParameters $parameters
	 * @return \System\Void|void
	 */
	public function Update($parameters);
}