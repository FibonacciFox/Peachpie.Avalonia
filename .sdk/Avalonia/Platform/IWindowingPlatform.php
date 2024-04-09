<?php
namespace Avalonia\Platform;
interface IWindowingPlatform
{

	/**
	 * @return \Avalonia\Platform\IWindowImpl
	 */
	public function CreateWindow();
	/**
	 * @return \Avalonia\Platform\IWindowImpl
	 */
	public function CreateEmbeddableWindow();
	/**
	 * @return \Avalonia\Platform\ITrayIconImpl
	 */
	public function CreateTrayIcon();
}