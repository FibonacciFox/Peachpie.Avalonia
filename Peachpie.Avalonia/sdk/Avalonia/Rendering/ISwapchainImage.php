<?php
namespace Avalonia\Rendering;
/**
 */
interface ISwapchainImage
{
	/**
	 */
	public function get_Size();
	/**
	 */
	public function get_LastPresent();
	/**
	 */
	public function BeginDraw();
	/**
	 */
	public function Present();
}
