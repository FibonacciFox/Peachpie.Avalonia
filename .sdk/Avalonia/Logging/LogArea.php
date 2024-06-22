<?php
namespace Avalonia\Logging;
class LogArea extends \System\Object
{

	/**
	 * @field
	 * @var \System\String|string
	 */
	const Property = 'Property';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Binding = 'Binding';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Animations = 'Animations';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Visual = 'Visual';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Layout = 'Layout';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Control = 'Control';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Platform = 'Platform';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const Win32Platform = 'Win32Platform';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const X11Platform = 'X11Platform';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const AndroidPlatform = 'AndroidPlatform';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const IOSPlatform = 'IOSPlatform';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const LinuxFramebufferPlatform = 'LinuxFramebufferPlatform';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const FreeDesktopPlatform = 'FreeDesktopPlatform';
	/**
	 * @field
	 * @var \System\String|string
	 */
	const macOSPlatform = 'macOSPlatform';
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $BrowserPlatform;

}