<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerBorderVisualMethodsOverride
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
class ServerBorderVisual extends \Avalonia\Rendering\Composition\Server\ServerCompositionDrawListVisual implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver
{
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetProperty($name){}
	/**
	 * @uses ServerBorderVisualMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerBorderVisualMethodsOverride::SetValue_2 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ServerBorderVisualMethodsOverride::GetValue_1 ($prop, $field)
	 * @uses ServerBorderVisualMethodsOverride::GetValue_2 ($prop, $field)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ServerBorderVisualMethodsOverride::SetAnimatedValue_1 ($prop, $field, $committedAt, $animation)
	 * @uses ServerBorderVisualMethodsOverride::SetAnimatedValue_2 ($property, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAnimatedValue(mixed ...$args){}
}
