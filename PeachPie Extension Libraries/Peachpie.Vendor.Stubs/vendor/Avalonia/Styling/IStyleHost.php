<?php
namespace Avalonia\Styling;
interface IStyleHost
{

	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles [generic: Avalonia\Styling\IStyle]
	 * @return \System\Void|void
	 */
	public function StylesAdded($styles);
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $styles [generic: Avalonia\Styling\IStyle]
	 * @return \System\Void|void
	 */
	public function StylesRemoved($styles);
}