<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StyleInstanceMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsActive_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function get_IsActive_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($instance){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_2($animations){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Add_3($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function MakeShared_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function MakeShared_2(){}
}
/**
 */
class StyleInstance extends \Avalonia\PropertyStore\ValueFrame implements 
	\Avalonia\Styling\IStyleInstance,
	\Avalonia\Styling\Activators\IStyleActivatorSink,
	\System\IDisposable
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasActivator(){}
	/**
	 * @return \Avalonia\Styling\IStyle
	 */
	public  function get_Source(){}
	/**
	 * @uses StyleInstanceMethodsOverride::get_IsActive_1 ()
	 * @uses StyleInstanceMethodsOverride::get_IsActive_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsActive(mixed ...$args){}
	/**
	 * @uses StyleInstanceMethodsOverride::Add_1 ($instance)
	 * @uses StyleInstanceMethodsOverride::Add_2 ($animations)
	 * @uses StyleInstanceMethodsOverride::Add_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $control
	 * @return \System\Void|void
	 */
	public  function ApplyAnimations($control){}
	/**
	 * @uses StyleInstanceMethodsOverride::MakeShared_1 ()
	 * @uses StyleInstanceMethodsOverride::MakeShared_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeShared(mixed ...$args){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnNext($value){}
	/**
	 * @param \Avalonia\Styling\Activators\IStyleActivator $activator
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPriority($activator){}
}
