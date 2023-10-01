<?php
namespace Avalonia\X11\Glx;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GlxContextMethodsOverride
{
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function MakeCurrent_1(){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function MakeCurrent_2($xid){}
}
/**
 */
class GlxContext extends \System\Object implements 
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
	 * @return \Avalonia\X11\Glx\GlxInterface
	 */
	public  function get_Glx(){}
	/**
	 * @return \Avalonia\X11\Glx\GlxDisplay
	 */
	public  function get_Display(){}
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
	 * @uses GlxContextMethodsOverride::MakeCurrent_1 ()
	 * @uses GlxContextMethodsOverride::MakeCurrent_2 ($xid)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeCurrent(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLost(){}
	/**
	 * @return \System\IDisposable
	 */
	public  function EnsureCurrent(){}
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
