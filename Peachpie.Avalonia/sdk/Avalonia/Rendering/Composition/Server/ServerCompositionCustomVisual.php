<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionCustomVisualMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_1($prop, $field, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_2($prop, $field, $value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\T
	 */
	#[MethodOverride] protected  function GetValue_1($prop, $field){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\T
	 */
	#[MethodOverride] protected  function GetValue_2($prop, $field){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetAnimatedValue_1($prop, $field, $committedAt, $animation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetAnimatedValue_2($property, $field, $value){}
}
/**
 */
class ServerCompositionCustomVisual extends \Avalonia\Rendering\Composition\Server\ServerCompositionContainerVisual implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject,
	\Avalonia\Rendering\Composition\Server\IServerClockItem
{
	/**
	 * @return \System\Void|void
	 */
	public  function OnTick(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function HandlerInvalidate(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function HandlerRegisterForNextAnimationFrameUpdate(){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetProperty($name){}
	/**
	 * @uses ServerCompositionCustomVisualMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionCustomVisualMethodsOverride::SetValue_2 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionCustomVisualMethodsOverride::GetValue_1 ($prop, $field)
	 * @uses ServerCompositionCustomVisualMethodsOverride::GetValue_2 ($prop, $field)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionCustomVisualMethodsOverride::SetAnimatedValue_1 ($prop, $field, $committedAt, $animation)
	 * @uses ServerCompositionCustomVisualMethodsOverride::SetAnimatedValue_2 ($property, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAnimatedValue(mixed ...$args){}
}
