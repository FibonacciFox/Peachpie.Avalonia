<?php
namespace Avalonia\Rendering;
interface ISwapchainImage
{

	/**
	 * @return \System\Void|void
	 */
	public function BeginDraw();
	/**
	 * @return \System\Void|void
	 */
	public function Present();
}