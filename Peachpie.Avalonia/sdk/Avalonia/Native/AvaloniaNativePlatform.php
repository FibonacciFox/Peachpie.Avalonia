<?php
namespace Avalonia\Native;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaNativePlatformMethodsOverride
{
	/**
	 * @return \Avalonia\Native\AvaloniaNativePlatform
	 */
	#[MethodOverride] public static function Initialize_1($factory, $options){}
	/**
	 * @return \Avalonia\Native\AvaloniaNativePlatform
	 */
	#[MethodOverride] public static function Initialize_2($options){}
}
/**
 */
class AvaloniaNativePlatform extends \System\Object implements 
	\Avalonia\Platform\IWindowingPlatform
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateAvaloniaNative(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	protected static function get_Compositor(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function set_Compositor($value){}
	/**
	 * @uses AvaloniaNativePlatformMethodsOverride::Initialize_1 ($factory, $options)
	 * @uses AvaloniaNativePlatformMethodsOverride::Initialize_2 ($options)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Initialize(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetupApplicationMenuExporter(){}
	/**
	 * @return \System\Void|void
	 */
	public  function SetupApplicationName(){}
	/**
	 * @param \Avalonia\AvaloniaNativePlatformOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DoInitialize($options){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnProcessExit($sender, $e){}
	/**
	 * @return \Avalonia\Platform\ITrayIconImpl
	 */
	public  function CreateTrayIcon(){}
	/**
	 * @return \Avalonia\Platform\IWindowImpl
	 */
	public  function CreateWindow(){}
	/**
	 * @return \Avalonia\Platform\IWindowImpl
	 */
	public  function CreateEmbeddableWindow(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
