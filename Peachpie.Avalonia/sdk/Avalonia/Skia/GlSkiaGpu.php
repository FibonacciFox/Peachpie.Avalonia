<?php
namespace Avalonia\Skia;
/**
 */
class GlSkiaGpu extends \System\Object implements 
	\Avalonia\Skia\ISkiaGpu,
	\Avalonia\Platform\IPlatformGraphicsContext,
	\System\IDisposable,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\Avalonia\OpenGL\IOpenGlTextureSharingRenderInterfaceContextFeature
{
	/**
	 * @return \SkiaSharp\GRContext
	 */
	public  function get_GrContext(){}
	/**
	 * @return \Avalonia\OpenGL\IGlContext
	 */
	public  function get_GlContext(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $surfaces
	 * @return \Avalonia\Skia\ISkiaGpuRenderTarget
	 */
	public  function TryCreateRenderTarget($surfaces){}
	/**
	 * @param \Avalonia\PixelSize $size
	 * @param \Avalonia\Skia\ISkiaGpuRenderSession $session
	 * @return \Avalonia\Skia\ISkiaSurface
	 */
	public  function TryCreateSurface($size, $session){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanCreateSharedContext(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $preferredVersions
	 * @return \Avalonia\OpenGL\IGlContext
	 */
	public  function CreateSharedContext($preferredVersions){}
	/**
	 * @param \Avalonia\OpenGL\IGlContext $context
	 * @param \Avalonia\PixelSize $size
	 * @return \Avalonia\OpenGL\ICompositionImportableOpenGlSharedTexture
	 */
	public  function CreateSharedTextureForComposition($context, $size){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLost(){}
	/**
	 * @return \System\IDisposable
	 */
	public  function EnsureCurrent(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Object|object
	 */
	public  function TryGetFeature($featureType){}
	/**
	 * @param \System\Action $dispose
	 * @return \System\Void|void
	 */
	public  function AddPostDispose($dispose){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
