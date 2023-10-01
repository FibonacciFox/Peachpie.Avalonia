<?php
namespace Avalonia\Win32\OpenGl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WglContextMethodsOverride
{
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function MakeCurrent_1(){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function MakeCurrent_2($hdc){}
}
/**
 */
class WglContext extends \System\Object implements 
	\Avalonia\OpenGL\IGlContext,
	\Avalonia\Platform\IPlatformGraphicsContext,
	\System\IDisposable,
	\Avalonia\Platform\IOptionalFeatureProvider
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Handle(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \Avalonia\OpenGL\GlVersion
	 */
	public  function get_Version(){}
	/**
	 * @return \Avalonia\OpenGL\GlInterface
	 */
	public  function get_GlInterface(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SampleCount(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_StencilSize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsCurrent(){}
	/**
	 * @uses WglContextMethodsOverride::MakeCurrent_1 ()
	 * @uses WglContextMethodsOverride::MakeCurrent_2 ($hdc)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeCurrent(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLost(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsLost($value){}
	/**
	 * @return \System\IDisposable
	 */
	public  function EnsureCurrent(){}
	/**
	 * @return \System\IDisposable
	 */
	protected  function Lock(){}
	/**
	 * @param \System\IntPtr $hWnd
	 * @return \System\IntPtr
	 */
	public  function CreateConfiguredDeviceContext($hWnd){}
	/**
	 * @param \Avalonia\OpenGL\IGlContext $context
	 * @return \System\Boolean
	 */
	public  function IsSharedWith($context){}
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
