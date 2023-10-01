<?php
namespace Avalonia\Platform;
/**
 */
interface IWindowImpl
{
	/**
	 */
	public function get_WindowState();
	/**
	 * @param \Avalonia\Controls\WindowState $value
	 */
	public function set_WindowState($value);
	/**
	 */
	public function get_WindowStateChanged();
	/**
	 * @param \System\Action_1 $value
	 */
	public function set_WindowStateChanged($value);
	/**
	 * @param \System\String|string $title
	 */
	public function SetTitle($title);
	/**
	 * @param \Avalonia\Platform\IWindowImpl $parent
	 */
	public function SetParent($parent);
	/**
	 * @param \System\Boolean $enable
	 */
	public function SetEnabled($enable);
	/**
	 */
	public function get_GotInputWhenDisabled();
	/**
	 * @param \System\Action $value
	 */
	public function set_GotInputWhenDisabled($value);
	/**
	 * @param \Avalonia\Controls\SystemDecorations $enabled
	 */
	public function SetSystemDecorations($enabled);
	/**
	 * @param \Avalonia\Platform\IWindowIconImpl $icon
	 */
	public function SetIcon($icon);
	/**
	 * @param \System\Boolean $value
	 */
	public function ShowTaskbarIcon($value);
	/**
	 * @param \System\Boolean $value
	 */
	public function CanResize($value);
	/**
	 */
	public function get_Closing();
	/**
	 * @param \System\Func_2 $value
	 */
	public function set_Closing($value);
	/**
	 */
	public function get_IsClientAreaExtendedToDecorations();
	/**
	 */
	public function get_ExtendClientAreaToDecorationsChanged();
	/**
	 * @param \System\Action_1 $value
	 */
	public function set_ExtendClientAreaToDecorationsChanged($value);
	/**
	 */
	public function get_NeedsManagedDecorations();
	/**
	 */
	public function get_ExtendedMargins();
	/**
	 */
	public function get_OffScreenMargin();
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 */
	public function BeginMoveDrag($e);
	/**
	 * @param \Avalonia\Controls\WindowEdge $edge
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 */
	public function BeginResizeDrag($edge, $e);
	/**
	 * @param \Avalonia\Size $clientSize
	 * @param \Avalonia\Controls\WindowResizeReason $reason
	 */
	public function Resize($clientSize, $reason);
	/**
	 * @param \Avalonia\PixelPoint $point
	 */
	public function Move($point);
	/**
	 * @param \Avalonia\Size $minSize
	 * @param \Avalonia\Size $maxSize
	 */
	public function SetMinMaxSize($minSize, $maxSize);
	/**
	 * @param \System\Boolean $extendIntoClientAreaHint
	 */
	public function SetExtendClientAreaToDecorationsHint($extendIntoClientAreaHint);
	/**
	 * @param \Avalonia\Platform\ExtendClientAreaChromeHints $hints
	 */
	public function SetExtendClientAreaChromeHints($hints);
	/**
	 * @param \System\Double|double $titleBarHeight
	 */
	public function SetExtendClientAreaTitleBarHeightHint($titleBarHeight);
}
