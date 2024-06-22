<?php
namespace Avalonia\Automation\Provider;
interface ISelectionProvider
{


	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1[Avalonia\Automation\Peers\AutomationPeer]
	 */
	public function GetSelection();
}