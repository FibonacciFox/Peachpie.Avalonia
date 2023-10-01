<?php
namespace Avalonia\Platform;
/**
 */
interface IPlatformRenderInterfaceContext
{
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $surfaces
	 */
	public function CreateRenderTarget($surfaces);
	/**
	 */
	public function get_IsLost();
}
