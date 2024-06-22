<?php
namespace Avalonia\Platform;
interface IWindowImpl
{


	/**
	 * @param \System\String|string $title
	 * @return \System\Void|void
	 */
	public function SetTitle($title);
	/**
	 * @param \Avalonia\Platform\IWindowImpl $parent
	 * @return \System\Void|void
	 */
	public function SetParent($parent);
	/**
	 * @param \System\Boolean|bool $enable
	 * @return \System\Void|void
	 */
	public function SetEnabled($enable);
	/**
	 * @param \Avalonia\Controls\SystemDecorations $enabled
	 * @return \System\Void|void
	 */
	public function SetSystemDecorations($enabled);
	/**
	 * @param \Avalonia\Platform\IWindowIconImpl $icon
	 * @return \System\Void|void
	 */
	public function SetIcon($icon);
	/**
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public function ShowTaskbarIcon($value);
	/**
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public function CanResize($value);
	/**
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public function BeginMoveDrag($e);
	/**
	 * @param \Avalonia\Controls\WindowEdge $edge
	 * @param \Avalonia\Input\PointerPressedEventArgs $e
	 * @return \System\Void|void
	 */
	public function BeginResizeDrag($edge, $e);
	/**
	 * @param \Avalonia\Size $clientSize
	 * @param \Avalonia\Controls\WindowResizeReason $reason
	 * @return \System\Void|void
	 */
	public function Resize($clientSize, $reason);
	/**
	 * @param \Avalonia\PixelPoint $point
	 * @return \System\Void|void
	 */
	public function Move($point);
	/**
	 * @param \Avalonia\Size $minSize
	 * @param \Avalonia\Size $maxSize
	 * @return \System\Void|void
	 */
	public function SetMinMaxSize($minSize, $maxSize);
	/**
	 * @param \System\Boolean|bool $extendIntoClientAreaHint
	 * @return \System\Void|void
	 */
	public function SetExtendClientAreaToDecorationsHint($extendIntoClientAreaHint);
	/**
	 * @param \Avalonia\Platform\ExtendClientAreaChromeHints $hints
	 * @return \System\Void|void
	 */
	public function SetExtendClientAreaChromeHints($hints);
	/**
	 * @param \System\Double|double $titleBarHeight
	 * @return \System\Void|void
	 */
	public function SetExtendClientAreaTitleBarHeightHint($titleBarHeight);
}