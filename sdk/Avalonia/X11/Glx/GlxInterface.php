<?php
namespace Avalonia\X11\Glx;
/**
 */
class GlxInterface extends \System\Object
{
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $draw
	 * @param \System\IntPtr $read
	 * @param \System\IntPtr $context
	 * @return \System\Boolean
	 */
	public  function MakeContextCurrent($display, $draw, $read, $context){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetCurrentContext(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetCurrentDisplay(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetCurrentDrawable(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetCurrentReadDrawable(){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $fbc
	 * @param \System\Int32[] $attrib_list
	 * @return \System\IntPtr
	 */
	public  function CreatePbuffer($dpy, $fbc, $attrib_list){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $fb
	 * @return \System\IntPtr
	 */
	public  function DestroyPbuffer($dpy, $fb){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\Int32|int $screen
	 * @param \System\Int32[] $attribList
	 * @return \Avalonia\X11\XVisualInfo*
	 */
	public  function ChooseVisual($dpy, $screen, $attribList){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \Avalonia\X11\XVisualInfo* $vis
	 * @param \System\IntPtr $shareList
	 * @param \System\Boolean $direct
	 * @return \System\IntPtr
	 */
	public  function CreateContext($dpy, $vis, $shareList, $direct){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $fbconfig
	 * @param \System\IntPtr $shareList
	 * @param \System\Boolean $direct
	 * @param \System\Int32[] $attribs
	 * @return \System\IntPtr
	 */
	public  function CreateContextAttribsARB($dpy, $fbconfig, $shareList, $direct, $attribs){}
	/**
	 * @param \System\String|string $buffer
	 * @return \System\IntPtr
	 */
	public static function GlxGetProcAddress($buffer){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $ctx
	 * @return \System\Void|void
	 */
	public  function DestroyContext($dpy, $ctx){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\Int32|int $screen
	 * @param \System\Int32[] $attrib_list
	 * @param \System\Int32& $nelements
	 * @return \System\IntPtr*
	 */
	public  function ChooseFBConfig($dpy, $screen, $attrib_list, $nelements){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\Int32|int $screen
	 * @param \System\Collections\Generic\IEnumerable_1 $attribs
	 * @param \System\Int32& $nelements
	 * @return \System\IntPtr*
	 */
	public  function ChooseFbConfig($dpy, $screen, $attribs, $nelements){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $config
	 * @return \Avalonia\X11\XVisualInfo*
	 */
	public  function GetVisualFromFBConfig($dpy, $config){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $config
	 * @param \System\Int32|int $attribute
	 * @param \System\Int32& $value
	 * @return \System\Int32|int
	 */
	public  function GetFBConfigAttrib($dpy, $config, $attribute, $value){}
	/**
	 * @param \System\IntPtr $dpy
	 * @param \System\IntPtr $drawable
	 * @return \System\Void|void
	 */
	public  function SwapBuffers($dpy, $drawable){}
	/**
	 * @return \System\Void|void
	 */
	public  function WaitX(){}
	/**
	 * @return \System\Void|void
	 */
	public  function WaitGL(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GlGetError(){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $screen
	 * @return \System\IntPtr
	 */
	public  function QueryExtensionsString($display, $screen){}
	/**
	 * @param \System\String|string $proc
	 * @return \System\IntPtr
	 */
	public static function SafeGetProcAddress($proc){}
	/**
	 * @param \System\IntPtr $display
	 * @return \System\String[]
	 */
	public  function GetExtensions($display){}
	/**
	 * @param \System\Func_2 $getProcAddress
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($getProcAddress){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
