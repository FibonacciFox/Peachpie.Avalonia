<?php
namespace Avalonia\OpenGL\Egl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EglInterfaceMethodsOverride
{
	/**
	 * @return \System\Func_2
	 */
	#[MethodOverride] private static function Load_1(){}
	/**
	 * @return \System\Func_2
	 */
	#[MethodOverride] private static function Load_2($library){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Initialize_1($display, $major, $minor){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Initialize_2($getProcAddress){}
}
/**
 */
class EglInterface extends \System\Object
{
	/**
	 * @uses EglInterfaceMethodsOverride::Load_1 ()
	 * @uses EglInterfaceMethodsOverride::Load_2 ($library)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Load(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetError(){}
	/**
	 * @param \System\IntPtr $nativeDisplay
	 * @return \System\IntPtr
	 */
	public  function GetDisplay($nativeDisplay){}
	/**
	 * @param \System\Int32|int $platform
	 * @param \System\IntPtr $nativeDisplay
	 * @param \System\Int32[] $attrs
	 * @return \System\IntPtr
	 */
	public  function GetPlatformDisplayExt($platform, $nativeDisplay, $attrs){}
	/**
	 * @uses EglInterfaceMethodsOverride::Initialize_1 ($display, $major, $minor)
	 * @uses EglInterfaceMethodsOverride::Initialize_2 ($getProcAddress)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Initialize(mixed ...$args){}
	/**
	 * @param \System\IntPtr $display
	 * @return \System\Void|void
	 */
	public  function Terminate($display){}
	/**
	 * @param \System\IntPtr $proc
	 * @return \System\IntPtr
	 */
	public  function GetProcAddress($proc){}
	/**
	 * @param \System\Int32|int $api
	 * @return \System\Boolean
	 */
	public  function BindApi($api){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32[] $attribs
	 * @param \System\IntPtr& $surfaceConfig
	 * @param \System\Int32|int $numConfigs
	 * @param \System\Int32& $choosenConfig
	 * @return \System\Boolean
	 */
	public  function ChooseConfig($display, $attribs, $surfaceConfig, $numConfigs, $choosenConfig){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $config
	 * @param \System\IntPtr $share
	 * @param \System\Int32[] $attrs
	 * @return \System\IntPtr
	 */
	public  function CreateContext($display, $config, $share, $attrs){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $context
	 * @return \System\Boolean
	 */
	public  function DestroyContext($display, $context){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $config
	 * @param \System\Int32[] $attrs
	 * @return \System\IntPtr
	 */
	public  function CreatePBufferSurface($display, $config, $attrs){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $draw
	 * @param \System\IntPtr $read
	 * @param \System\IntPtr $context
	 * @return \System\Boolean
	 */
	public  function MakeCurrent($display, $draw, $read, $context){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetCurrentContext(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function GetCurrentDisplay(){}
	/**
	 * @param \System\Int32|int $readDraw
	 * @return \System\IntPtr
	 */
	public  function GetCurrentSurface($readDraw){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $surface
	 * @return \System\Void|void
	 */
	public  function DestroySurface($display, $surface){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $surface
	 * @return \System\Void|void
	 */
	public  function SwapBuffers($display, $surface){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $config
	 * @param \System\IntPtr $window
	 * @param \System\Int32[] $attrs
	 * @return \System\IntPtr
	 */
	public  function CreateWindowSurface($display, $config, $window, $attrs){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $surface
	 * @param \System\Int32|int $buffer
	 * @return \System\Int32|int
	 */
	public  function BindTexImage($display, $surface, $buffer){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\IntPtr $config
	 * @param \System\Int32|int $attr
	 * @param \System\Int32& $rv
	 * @return \System\Boolean
	 */
	public  function GetConfigAttrib($display, $config, $attr, $rv){}
	/**
	 * @return \System\Boolean
	 */
	public  function WaitGL(){}
	/**
	 * @return \System\Boolean
	 */
	public  function WaitClient(){}
	/**
	 * @param \System\Int32|int $engine
	 * @return \System\Boolean
	 */
	public  function WaitNative($engine){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $i
	 * @return \System\IntPtr
	 */
	public  function QueryStringNative($display, $i){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $i
	 * @return \System\String|string
	 */
	public  function QueryString($display, $i){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $buftype
	 * @param \System\IntPtr $buffer
	 * @param \System\IntPtr $config
	 * @param \System\Int32[] $attrib_list
	 * @return \System\IntPtr
	 */
	public  function CreatePbufferFromClientBuffer($display, $buftype, $buffer, $config, $attrib_list){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $attr
	 * @param \System\IntPtr& $res
	 * @return \System\Boolean
	 */
	public  function QueryDisplayAttribExt($display, $attr, $res){}
	/**
	 * @param \System\IntPtr $display
	 * @param \System\Int32|int $attr
	 * @param \System\IntPtr& $res
	 * @return \System\Boolean
	 */
	public  function QueryDeviceAttribExt($display, $attr, $res){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsGetPlatformDisplayExtAvailable(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsQueryDisplayAttribExtAvailable(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsQueryDeviceAttribExtAvailable(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
