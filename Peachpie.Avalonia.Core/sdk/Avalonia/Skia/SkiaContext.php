<?php
namespace Avalonia\Skia;
/**
 */
class SkiaContext extends \System\Object implements 
	\Avalonia\Platform\IPlatformRenderInterfaceContext,
	\Avalonia\Platform\IOptionalFeatureProvider,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $surfaces
	 * @return \Avalonia\Platform\IRenderTarget
	 */
	public  function CreateRenderTarget($surfaces){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLost(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Object|object
	 */
	public  function TryGetFeature($featureType){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
