<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IconLoaderStubMethodsOverride
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
class IconLoaderStub extends \System\Object implements 
	\Avalonia\Platform\IPlatformIconLoader
{
	/**
	 * @uses IconLoaderStubMethodsOverride::LoadIcon_1 ($fileName)
	 * @uses IconLoaderStubMethodsOverride::LoadIcon_2 ($stream)
	 * @uses IconLoaderStubMethodsOverride::LoadIcon_3 ($bitmap)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LoadIcon(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
