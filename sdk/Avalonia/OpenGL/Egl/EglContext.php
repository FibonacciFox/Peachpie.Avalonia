<?php
namespace Avalonia\OpenGL\Egl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EglContextMethodsOverride
{
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function MakeCurrent_1(){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function MakeCurrent_2($surface){}
}
/**
 */
class EglContext extends \System\Object implements 
	\Avalonia\OpenGL\IGlContext,
	\Avalonia\Platform\IPlatformGraphicsContext,
	\System\IDisposable,
	\Avalonia\Platform\IOptionalFeatureProvider
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Context(){}
	/**
	 * @return \Avalonia\OpenGL\Egl\EglSurface
	 */
	public  function get_OffscreenSurface(){}
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
	 * @return \Avalonia\OpenGL\Egl\EglDisplay
	 */
	public  function get_Display(){}
	/**
	 * @uses EglContextMethodsOverride::MakeCurrent_1 ()
	 * @uses EglContextMethodsOverride::MakeCurrent_2 ($surface)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeCurrent(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function NotifyContextLost(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLost(){}
	/**
	 * @return \System\IDisposable
	 */
	public  function EnsureCurrent(){}
	/**
	 * @return \System\IDisposable
	 */
	public  function EnsureLocked(){}
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
	 * @return \System\Boolean
	 */
	public  function get_IsCurrent(){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
