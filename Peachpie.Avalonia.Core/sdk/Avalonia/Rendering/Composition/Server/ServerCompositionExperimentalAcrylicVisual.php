<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionExperimentalAcrylicVisualMethodsOverride
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
class ServerCompositionExperimentalAcrylicVisual extends \Avalonia\Rendering\Composition\Server\ServerCompositionDrawListVisual implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver
{
	/**
	 * @return \Avalonia\Media\ImmutableExperimentalAcrylicMaterial
	 */
	public  function get_Material(){}
	/**
	 * @param \Avalonia\Media\ImmutableExperimentalAcrylicMaterial $value
	 * @return \System\Void|void
	 */
	public  function set_Material($value){}
	/**
	 * @return \Avalonia\CornerRadius
	 */
	public  function get_CornerRadius(){}
	/**
	 * @param \Avalonia\CornerRadius $value
	 * @return \System\Void|void
	 */
	public  function set_CornerRadius($value){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetProperty($name){}
	/**
	 * @uses ServerCompositionExperimentalAcrylicVisualMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionExperimentalAcrylicVisualMethodsOverride::SetValue_2 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionExperimentalAcrylicVisualMethodsOverride::GetValue_1 ($prop, $field)
	 * @uses ServerCompositionExperimentalAcrylicVisualMethodsOverride::GetValue_2 ($prop, $field)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionExperimentalAcrylicVisualMethodsOverride::SetAnimatedValue_1 ($prop, $field, $committedAt, $animation)
	 * @uses ServerCompositionExperimentalAcrylicVisualMethodsOverride::SetAnimatedValue_2 ($property, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAnimatedValue(mixed ...$args){}
}
