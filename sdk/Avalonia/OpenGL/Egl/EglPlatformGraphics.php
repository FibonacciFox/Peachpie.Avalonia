<?php
namespace Avalonia\OpenGL\Egl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EglPlatformGraphicsMethodsOverride
{
	/**
	 * @return \Avalonia\OpenGL\Egl\EglPlatformGraphics
	 */
	#[MethodOverride] public static function TryCreate_1(){}
	/**
	 * @return \Avalonia\OpenGL\Egl\EglPlatformGraphics
	 */
	#[MethodOverride] public static function TryCreate_2($displayFactory){}
}
/**
 */
class EglPlatformGraphics extends \System\Object implements 
	\Avalonia\Platform\IPlatformGraphics
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $UsesSharedContext;
	/**
	 * @return \System\Boolean
	 */
	public  function get_UsesSharedContext(){}
	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	public  function CreateContext(){}
	/**
	 * @return \Avalonia\Platform\IPlatformGraphicsContext
	 */
	public  function GetSharedContext(){}
	/**
	 * @uses EglPlatformGraphicsMethodsOverride::TryCreate_1 ()
	 * @uses EglPlatformGraphicsMethodsOverride::TryCreate_2 ($displayFactory)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryCreate(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
