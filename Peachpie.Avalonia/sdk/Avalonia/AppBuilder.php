<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AppBuilderMethodsOverride
{
	/**
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride] public static function Configure_1(){}
	/**
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride] public static function Configure_2($appFactory){}
	/**
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride] protected static function Configure_3($entryPointType){}
	/**
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride] public  function With_1($options){}
	/**
	 * @return \Avalonia\AppBuilder
	 */
	#[MethodOverride] public  function With_2($options){}
}
/**
 */
class AppBuilder extends \System\Object
{
	/**
	 * @return \System\Action
	 */
	public  function get_RuntimePlatformServicesInitializer(){}
	/**
	 * @param \System\Action $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_RuntimePlatformServicesInitializer($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_RuntimePlatformServicesName(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_RuntimePlatformServicesName($value){}
	/**
	 * @return \Avalonia\Application
	 */
	public  function get_Instance(){}
	/**
	 * @param \Avalonia\Application $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Instance($value){}
	/**
	 * @return \System\Type
	 */
	public  function get_ApplicationType(){}
	/**
	 * @param \System\Type $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_ApplicationType($value){}
	/**
	 * @return \System\Action
	 */
	public  function get_WindowingSubsystemInitializer(){}
	/**
	 * @param \System\Action $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_WindowingSubsystemInitializer($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_WindowingSubsystemName(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_WindowingSubsystemName($value){}
	/**
	 * @return \System\Action
	 */
	public  function get_RenderingSubsystemInitializer(){}
	/**
	 * @param \System\Action $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_RenderingSubsystemInitializer($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_RenderingSubsystemName(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_RenderingSubsystemName($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_AfterSetupCallback(){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_AfterSetupCallback($value){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_AfterPlatformServicesSetupCallback(){}
	/**
	 * @param \System\Action_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_AfterPlatformServicesSetupCallback($value){}
	/**
	 * @uses AppBuilderMethodsOverride::Configure_1 ()
	 * @uses AppBuilderMethodsOverride::Configure_2 ($appFactory)
	 * @uses AppBuilderMethodsOverride::Configure_3 ($entryPointType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Configure(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Self(){}
	/**
	 * @param \System\Action_1 $callback
	 * @return \Avalonia\AppBuilder
	 */
	public  function AfterSetup($callback){}
	/**
	 * @param \System\Action_1 $callback
	 * @return \Avalonia\AppBuilder
	 */
	public  function AfterPlatformServicesSetup($callback){}
	/**
	 * @param \Avalonia\AppMainDelegate $main
	 * @param \System\String[] $args
	 * @return \System\Void|void
	 */
	public  function Start($main, $args){}
	/**
	 * @return \Avalonia\AppBuilder
	 */
	public  function SetupWithoutStarting(){}
	/**
	 * @param \Avalonia\Controls\ApplicationLifetimes\IApplicationLifetime $lifetime
	 * @return \Avalonia\AppBuilder
	 */
	public  function SetupWithLifetime($lifetime){}
	/**
	 * @param \System\Action $initializer
	 * @param \System\String|string $name
	 * @return \Avalonia\AppBuilder
	 */
	public  function UseWindowingSubsystem($initializer, $name){}
	/**
	 * @param \System\Action $initializer
	 * @param \System\String|string $name
	 * @return \Avalonia\AppBuilder
	 */
	public  function UseRenderingSubsystem($initializer, $name){}
	/**
	 * @param \System\Action $initializer
	 * @param \System\String|string $name
	 * @return \Avalonia\AppBuilder
	 */
	public  function UseRuntimePlatformSubsystem($initializer, $name){}
	/**
	 * @return \Avalonia\AppBuilder
	 */
	public  function UseStandardRuntimePlatformSubsystem(){}
	/**
	 * @uses AppBuilderMethodsOverride::With_1 ($options)
	 * @uses AppBuilderMethodsOverride::With_2 ($options)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function With(mixed ...$args){}
	/**
	 * @param \System\Action_1 $action
	 * @return \Avalonia\AppBuilder
	 */
	public  function ConfigureFonts($action){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Setup(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SetupUnsafe(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
