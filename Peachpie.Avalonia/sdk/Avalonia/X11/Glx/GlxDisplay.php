<?php
namespace Avalonia\X11\Glx;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GlxDisplayMethodsOverride
{
	/**
	 * @return \Avalonia\X11\Glx\GlxContext
	 */
	#[MethodOverride] public  function CreateContext_1(){}
	/**
	 * @return \Avalonia\X11\Glx\GlxContext
	 */
	#[MethodOverride] public  function CreateContext_2($share){}
	/**
	 * @return \Avalonia\X11\Glx\GlxContext
	 */
	#[MethodOverride] private  function CreateContext_3($defaultXid, $share, $sampleCount, $stencilSize, $ownsPBuffer){}
}
/**
 */
class GlxDisplay extends \System\Object
{
	/**
	 * @return \Avalonia\X11\XVisualInfo*
	 */
	public  function get_VisualInfo(){}
	/**
	 * @return \Avalonia\X11\Glx\GlxContext
	 */
	public  function get_DeferredContext(){}
	/**
	 * @return \Avalonia\X11\Glx\GlxInterface
	 */
	public  function get_Glx(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreatePBuffer(){}
	/**
	 * @uses GlxDisplayMethodsOverride::CreateContext_1 ()
	 * @uses GlxDisplayMethodsOverride::CreateContext_2 ($share)
	 * @uses GlxDisplayMethodsOverride::CreateContext_3 ($defaultXid, $share, $sampleCount, $stencilSize, $ownsPBuffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateContext(mixed ...$args){}
	/**
	 * @param \System\IntPtr $xid
	 * @return \System\Void|void
	 */
	public  function SwapBuffers($xid){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
