<?php
namespace Avalonia\Automation\Provider;
/**
 */
interface ISelectionProvider
{
	/**
	 */
	public function get_CanSelectMultiple();
	/**
	 */
	public function get_IsSelectionRequired();
	/**
	 */
	public function GetSelection();
}
