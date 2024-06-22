<?php
namespace Avalonia\Platform;
interface IPlatformIconLoader
{


	/**
	 * @param \System\String|string $fileName
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	public function LoadIcon($fileName);
	/**
	 * @param \System\IO\Stream $stream
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	public function LoadIcon($stream);
	/**
	 * @param \Avalonia\Platform\IBitmapImpl $bitmap
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	public function LoadIcon($bitmap);
}