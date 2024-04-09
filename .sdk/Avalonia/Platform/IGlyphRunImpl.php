<?php
namespace Avalonia\Platform;
interface IGlyphRunImpl
{

	/**
	 * @param \System\Single $lowerLimit
	 * @param \System\Single $upperLimit
	 * @return \System\Collections\Generic\IReadOnlyList_1[System\Single]
	 */
	public function GetIntersections($lowerLimit, $upperLimit);
}