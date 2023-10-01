<?php
namespace Avalonia\Layout;
/**
 */
interface ILayoutRoot
{
	/**
	 */
	public function get_ClientSize();
	/**
	 */
	public function get_LayoutScaling();
	/**
	 */
	protected function get_LayoutManager();
}
