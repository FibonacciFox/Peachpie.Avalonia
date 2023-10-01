<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionSurfaceVisualMethodsOverride
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
class ServerCompositionSurfaceVisual extends \Avalonia\Rendering\Composition\Server\ServerCompositionContainerVisual implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSurfaceInvalidated(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionSurface
	 */
	public  function get_Surface(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionSurface $value
	 * @return \System\Void|void
	 */
	public  function set_Surface($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSurfaceChanged(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSurfaceChanging(){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetProperty($name){}
	/**
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::SetValue_2 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::GetValue_1 ($prop, $field)
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::GetValue_2 ($prop, $field)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::SetAnimatedValue_1 ($prop, $field, $committedAt, $animation)
	 * @uses ServerCompositionSurfaceVisualMethodsOverride::SetAnimatedValue_2 ($property, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAnimatedValue(mixed ...$args){}
}
