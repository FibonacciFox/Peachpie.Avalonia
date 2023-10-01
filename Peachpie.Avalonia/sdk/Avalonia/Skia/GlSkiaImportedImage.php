<?php
namespace Avalonia\Skia;
/**
 */
class GlSkiaImportedImage extends \System\Object implements 
	\Avalonia\Platform\IPlatformRenderInterfaceImportedImage,
	\Avalonia\Platform\IPlatformRenderInterfaceImportedObject,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageFormat $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertColorType($format){}
	/**
	 * @param \System\Int32|int $textureId
	 * @param \System\Int32|int $format
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 * @param \System\Boolean $topLeft
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryCreateSurface($textureId, $format, $width, $height, $topLeft){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TakeSnapshot(){}
	/**
	 * @param \System\UInt32 $acquireIndex
	 * @param \System\UInt32 $releaseIndex
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public  function SnapshotWithKeyedMutex($acquireIndex, $releaseIndex){}
	/**
	 * @param \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore $waitForSemaphore
	 * @param \Avalonia\Platform\IPlatformRenderInterfaceImportedSemaphore $signalSemaphore
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public  function SnapshotWithSemaphores($waitForSemaphore, $signalSemaphore){}
	/**
	 * @return \Avalonia\Platform\IBitmapImpl
	 */
	public  function SnapshotWithAutomaticSync(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
