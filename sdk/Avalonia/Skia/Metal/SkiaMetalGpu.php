<?php
namespace Avalonia\Skia\Metal;
/**
 */
class SkiaMetalGpu extends \System\Object implements 
	\Avalonia\Skia\ISkiaGpu,
	\Avalonia\Platform\IPlatformGraphicsContext,
	\System\IDisposable,
	\Avalonia\Platform\IOptionalFeatureProvider
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLost;
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Object|object
	 */
	public  function TryGetFeature($featureType){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLost(){}
	/**
	 * @return \System\IDisposable
	 */
	public  function EnsureCurrent(){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
