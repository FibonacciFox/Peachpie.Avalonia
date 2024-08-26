<?php
namespace Avalonia\Rendering;
class SwapchainBase_1 extends \System\Object implements
	\System\IAsyncDisposable
{

	private static function IsBroken($image){}
	private static function IsReady($image){}
	private function CleanupAndFindNextImage($size){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @return \TImage
	 */
	abstract protected function CreateImage($size);
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \TImage& &$image
	 * @return \System\IDisposable
	 */
	protected function BeginDrawCore($size, &$image){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function DisposeAsync(){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositionGpuInterop $interop
	 * @param \Avalonia\Rendering\Composition\CompositionDrawingSurface $target
	 */
	public function __construct($interop, $target){}
}