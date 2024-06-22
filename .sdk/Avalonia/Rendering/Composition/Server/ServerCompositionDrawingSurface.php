<?php
namespace Avalonia\Rendering\Composition\Server;
class ServerCompositionDrawingSurface extends \Avalonia\Rendering\Composition\Server\ServerCompositionSurface implements
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \Avalonia\Utilities\IRef_1[Avalonia\Platform\IBitmapImpl]
	 * @since readonly
	 */
	public $Bitmap;
	/**
	 * @property
	 * @var \System\Action
	 */
	public $Changed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsActive;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @since readonly
	 */
	public $Compositor;
	private function PerformSanityChecks($image){}
	private function Update($newImage, $context){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionImportedGpuImage $image
	 * @return \System\Void|void
	 */
	public function UpdateWithAutomaticSync($image){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionImportedGpuImage $image
	 * @param \System\UInt32 $acquireIndex
	 * @param \System\UInt32 $releaseIndex
	 * @return \System\Void|void
	 */
	public function UpdateWithKeyedMutex($image, $acquireIndex, $releaseIndex){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionImportedGpuImage $image
	 * @param \Avalonia\Rendering\Composition\CompositionImportedGpuSemaphore $wait
	 * @param \Avalonia\Rendering\Composition\CompositionImportedGpuSemaphore $signal
	 * @return \System\Void|void
	 */
	public function UpdateWithSemaphores($image, $wait, $signal){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function GetProperty($name){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositor $compositor
	 */
	public function __construct($compositor){}
}