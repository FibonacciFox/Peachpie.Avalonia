<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IMultipleViewProvider
{
	/**
	 * @param \System\Int32|int $viewId
	 */
	public function GetViewName($viewId);
	/**
	 * @param \System\Int32|int $viewId
	 */
	public function SetCurrentView($viewId);
	/**
	 */
	public function get_CurrentView();
	/**
	 */
	public function GetSupportedViews();
}
