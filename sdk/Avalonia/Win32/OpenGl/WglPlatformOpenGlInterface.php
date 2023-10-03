<?php
namespace Avalonia\Win32\OpenGl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WglPlatformOpenGlInterfaceMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	#[MethodOverride] private  function CreateContext_1(){}
	/**
	 * @return \Avalonia\OpenGL\IGlContext
	 */
	#[MethodOverride] public  function CreateContext_2(){}
}
/**
 */
class WglPlatformOpenGlInterface extends \System\Object implements 
	\Avalonia\Platform\IPlatformGraphics
{
	/**
	 * @return \Avalonia\Win32\OpenGl\WglContext
	 */
	public  function get_PrimaryContext(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UsesSharedContext(){}
	/**
	 * @uses WglPlatformOpenGlInterfaceMethodsOverride::CreateContext_1 ()
	 * @uses WglPlatformOpenGlInterfaceMethodsOverride::CreateContext_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateContext(mixed ...$args){}
	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	public  function GetSharedContext(){}
	/**
	 * @return \Avalonia\Win32\OpenGl\WglPlatformOpenGlInterface
	 */
	public static function TryCreate(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
