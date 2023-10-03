<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnWindow
{
	/**
	 * @param \System\Int32|int $enable
	 */
	public function SetEnabled($enable);
	/**
	 * @param \Avalonia\Native\Interop\IAvnWindow $parent
	 */
	public function SetParent($parent);
	/**
	 * @param \System\Int32|int $value
	 */
	public function SetCanResize($value);
	/**
	 * @param \Avalonia\Native\Interop\SystemDecorations $value
	 */
	public function SetDecorations($value);
	/**
	 * @param \System\String|string $utf8Title
	 */
	public function SetTitle($utf8Title);
	/**
	 * @param \Avalonia\Native\Interop\AvnColor $color
	 */
	public function SetTitleBarColor($color);
	/**
	 * @param \Avalonia\Native\Interop\AvnWindowState $state
	 */
	public function SetWindowState($state);
	/**
	 */
	public function get_WindowState();
	/**
	 */
	public function TakeFocusFromChildren();
	/**
	 * @param \System\Int32|int $enable
	 */
	public function SetExtendClientArea($enable);
	/**
	 * @param \Avalonia\Native\Interop\AvnExtendClientAreaChromeHints $hints
	 */
	public function SetExtendClientAreaHints($hints);
	/**
	 */
	public function get_ExtendTitleBarHeight();
	/**
	 * @param \System\Double|double $value
	 */
	public function SetExtendTitleBarHeight($value);
}
