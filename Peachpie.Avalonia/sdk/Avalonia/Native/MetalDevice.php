<?php
namespace Avalonia\Native;
/**
 */
class MetalDevice extends \System\Object implements 
	\Avalonia\Metal\IMetalDevice,
	\Avalonia\Platform\IPlatformGraphicsContext,
	\System\IDisposable,
	\Avalonia\Platform\IOptionalFeatureProvider
{
	/**
	 * @return \Avalonia\Native\Interop\IAvnMetalDevice
	 */
	public  function get_Native(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnMetalDevice $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Native($value){}
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
	 * @return \System\IntPtr
	 */
	public  function get_Device(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_CommandQueue(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
