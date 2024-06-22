<?php
namespace Avalonia\Automation\Provider;
interface ISelectionItemProvider
{


	/**
	 * @return \System\Void|void
	 */
	public function AddToSelection();
	/**
	 * @return \System\Void|void
	 */
	public function RemoveFromSelection();
	/**
	 * @return \System\Void|void
	 */
	public function Select();
}