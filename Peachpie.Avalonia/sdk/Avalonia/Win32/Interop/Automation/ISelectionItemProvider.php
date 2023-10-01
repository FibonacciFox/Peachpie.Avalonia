<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface ISelectionItemProvider
{
	/**
	 */
	public function Select();
	/**
	 */
	public function AddToSelection();
	/**
	 */
	public function RemoveFromSelection();
	/**
	 */
	public function get_IsSelected();
	/**
	 */
	public function get_SelectionContainer();
}
