<?php
namespace Avalonia\Controls;
interface ISetLogicalParent
{


	/**
	 * @param \Avalonia\LogicalTree\ILogical $parent
	 * @return \System\Void|void
	 */
	public function SetParent($parent);
}