<?php
namespace Avalonia\Automation\Provider;
/**
 */
interface IExpandCollapseProvider
{
	/**
	 */
	public function get_ExpandCollapseState();
	/**
	 */
	public function get_ShowsMenu();
	/**
	 */
	public function Expand();
	/**
	 */
	public function Collapse();
}
