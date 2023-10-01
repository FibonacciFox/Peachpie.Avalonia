<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface ISelectionProvider
{
	/**
	 */
	public function GetSelection();
	/**
	 */
	public function get_CanSelectMultiple();
	/**
	 */
	public function get_IsSelectionRequired();
}
