<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
interface IExpandCollapseProvider
{
	/**
	 */
	public function Expand();
	/**
	 */
	public function Collapse();
	/**
	 */
	public function get_ExpandCollapseState();
}
