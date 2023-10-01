<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnScreens
{
	/**
	 */
	public function get_ScreenCount();
	/**
	 * @param \System\Int32|int $index
	 */
	public function GetScreen($index);
}
