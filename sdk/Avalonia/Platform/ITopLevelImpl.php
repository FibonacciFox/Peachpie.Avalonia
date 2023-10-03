<?php
namespace Avalonia\Platform;
/**
 */
interface ITopLevelImpl
{
	/**
	 */
	public function get_ClientSize();
	/**
	 */
	public function get_FrameSize();
	/**
	 */
	public function get_RenderScaling();
	/**
	 */
	public function get_Surfaces();
	/**
	 */
	public function get_Input();
	/**
	 * @param \System\Action_1 $value
	 */
	public function set_Input($value);
	/**
	 */
	public function get_Paint();
	/**
	 * @param \System\Action_1 $value
	 */
	public function set_Paint($value);
	/**
	 */
	public function get_Resized();
	/**
	 * @param \System\Action_2 $value
	 */
	public function set_Resized($value);
	/**
	 */
	public function get_ScalingChanged();
	/**
	 * @param \System\Action_1 $value
	 */
	public function set_ScalingChanged($value);
	/**
	 */
	public function get_TransparencyLevelChanged();
	/**
	 * @param \System\Action_1 $value
	 */
	public function set_TransparencyLevelChanged($value);
	/**
	 */
	public function get_Compositor();
	/**
	 * @param \Avalonia\Input\IInputRoot $inputRoot
	 */
	public function SetInputRoot($inputRoot);
	/**
	 * @param \Avalonia\PixelPoint $point
	 */
	public function PointToClient($point);
	/**
	 * @param \Avalonia\Point $point
	 */
	public function PointToScreen($point);
	/**
	 * @param \Avalonia\Platform\ICursorImpl $cursor
	 */
	public function SetCursor($cursor);
	/**
	 */
	public function get_Closed();
	/**
	 * @param \System\Action $value
	 */
	public function set_Closed($value);
	/**
	 */
	public function get_LostFocus();
	/**
	 * @param \System\Action $value
	 */
	public function set_LostFocus($value);
	/**
	 */
	public function CreatePopup();
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $transparencyLevels
	 */
	public function SetTransparencyLevelHint($transparencyLevels);
	/**
	 */
	public function get_TransparencyLevel();
	/**
	 * @param \Avalonia\Platform\PlatformThemeVariant $themeVariant
	 */
	public function SetFrameThemeVariant($themeVariant);
	/**
	 */
	public function get_AcrylicCompensationLevels();
}
