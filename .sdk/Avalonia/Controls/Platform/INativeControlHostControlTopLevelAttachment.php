<?php
namespace Avalonia\Controls\Platform;
interface INativeControlHostControlTopLevelAttachment
{


	/**
	 * @param \Avalonia\Controls\Platform\INativeControlHostImpl $host
	 * @return \System\Boolean|bool
	 */
	public function IsCompatibleWith($host);
	/**
	 * @param \Avalonia\Size $size
	 * @return \System\Void|void
	 */
	public function HideWithSize($size);
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public function ShowInBounds($rect);
}