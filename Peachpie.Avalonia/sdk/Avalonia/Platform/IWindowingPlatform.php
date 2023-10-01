<?php
namespace Avalonia\Platform;
/**
 */
interface IWindowingPlatform
{
	/**
	 */
	public function CreateWindow();
	/**
	 */
	public function CreateEmbeddableWindow();
	/**
	 */
	public function CreateTrayIcon();
}
