<?php
namespace Avalonia\Platform;
interface ITopLevelImpl
{


	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 * @return \System\Void|void
	 */
	public function SetInputRoot($inputRoot);
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \Avalonia\Point
	 */
	public function PointToClient($point);
	/**
	 * @param \Avalonia\Point $point
	 * @return \Avalonia\PixelPoint
	 */
	public function PointToScreen($point);
	/**
	 * @param \Avalonia\Platform\ICursorImpl $cursor
	 * @return \System\Void|void
	 */
	public function SetCursor($cursor);
	/**
	 * @return \Avalonia\Platform\IPopupImpl
	 */
	public function CreatePopup();
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $transparencyLevels [generic: Avalonia\Controls\WindowTransparencyLevel]
	 * @return \System\Void|void
	 */
	public function SetTransparencyLevelHint($transparencyLevels);
	/**
	 * @param \Avalonia\Platform\PlatformThemeVariant $themeVariant
	 * @return \System\Void|void
	 */
	public function SetFrameThemeVariant($themeVariant);
}