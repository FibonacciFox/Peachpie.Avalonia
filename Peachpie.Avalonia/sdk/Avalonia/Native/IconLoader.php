<?php
namespace Avalonia\Native;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IconLoaderMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	#[MethodOverride] public  function LoadIcon_1($fileName){}
	/**
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	#[MethodOverride] public  function LoadIcon_2($stream){}
	/**
	 * @return \Avalonia\Platform\IWindowIconImpl
	 */
	#[MethodOverride] public  function LoadIcon_3($bitmap){}
}
/**
 */
class IconLoader extends \System\Object implements 
	\Avalonia\Platform\IPlatformIconLoader
{
	/**
	 * @uses IconLoaderMethodsOverride::LoadIcon_1 ($fileName)
	 * @uses IconLoaderMethodsOverride::LoadIcon_2 ($stream)
	 * @uses IconLoaderMethodsOverride::LoadIcon_3 ($bitmap)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadIcon(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
