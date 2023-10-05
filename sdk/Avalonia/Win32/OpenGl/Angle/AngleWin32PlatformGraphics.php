<?php
namespace Avalonia\Win32\OpenGl\Angle;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AngleWin32PlatformGraphicsMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	#[MethodOverride] public  function CreateContext_1(){}
	/**
	 * @return \Avalonia\OpenGL\IGlContext
	 */
	#[MethodOverride] public  function CreateContext_2($versions){}
}
/**
 */
class AngleWin32PlatformGraphics extends \System\Object implements 
	\Avalonia\Platform\IPlatformGraphics,
	\Avalonia\OpenGL\IPlatformGraphicsOpenGlContextFactory
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $UsesSharedContext;
	/**
	 * @var \Avalonia\Win32\AngleOptions+PlatformApi
	 * @property
	 */
	public readonly $PlatformApi;
	/**
	 * @return \System\Boolean
	 */
	public  function get_UsesSharedContext(){}
	/**
	 * @return \Avalonia\Win32\PlatformApi
	 */
	public  function get_PlatformApi(){}
	/**
	 * @uses AngleWin32PlatformGraphicsMethodsOverride::CreateContext_1 ()
	 * @uses AngleWin32PlatformGraphicsMethodsOverride::CreateContext_2 ($versions)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateContext(mixed ...$args){}
	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	public  function GetSharedContext(){}
	/**
	 * @param \Avalonia\Win32\AngleOptions $options
	 * @return \Avalonia\Win32\OpenGl\Angle\AngleWin32PlatformGraphics
	 */
	public static function TryCreate($options){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
