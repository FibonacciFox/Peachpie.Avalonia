<?php
namespace Avalonia\Styling;
/**
 */
interface IStyleHost
{
	/**
	 */
	public function get_IsStylesInitialized();
	/**
	 */
	public function get_Styles();
	/**
	 */
	public function get_StylingParent();
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles
	 */
	public function StylesAdded($styles);
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles
	 */
	public function StylesRemoved($styles);
}
