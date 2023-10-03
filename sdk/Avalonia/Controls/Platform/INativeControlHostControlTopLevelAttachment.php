<?php
namespace Avalonia\Controls\Platform;
/**
 */
interface INativeControlHostControlTopLevelAttachment
{
	/**
	 */
	public function get_AttachedTo();
	/**
	 * @param \Avalonia\Controls\Platform\INativeControlHostImpl $value
	 */
	public function set_AttachedTo($value);
	/**
	 * @param \Avalonia\Controls\Platform\INativeControlHostImpl $host
	 */
	public function IsCompatibleWith($host);
	/**
	 * @param \Avalonia\Size $size
	 */
	public function HideWithSize($size);
	/**
	 * @param \Avalonia\Rect $rect
	 */
	public function ShowInBounds($rect);
}
