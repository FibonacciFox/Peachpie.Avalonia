<?php
namespace Avalonia\Automation\Provider;
/**
 */
interface ISelectionItemProvider
{
	/**
	 */
	public function get_IsSelected();
	/**
	 */
	public function get_SelectionContainer();
	/**
	 */
	public function AddToSelection();
	/**
	 */
	public function RemoveFromSelection();
	/**
	 */
	public function Select();
}
