<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionContainerVisualMethodsOverride
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
class ServerCompositionContainerVisual extends \Avalonia\Rendering\Composition\Server\ServerCompositionVisual implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionVisualCollection
	 */
	public  function get_Children(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisualCollection $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Children($value){}
	/**
	 * @param \Avalonia\Media\IImmutableEffect $effect
	 * @param \Avalonia\Rect $transformedBounds
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddEffectPaddedDirtyRect($effect, $transformedBounds){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize(){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetProperty($name){}
	/**
	 * @uses ServerCompositionContainerVisualMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionContainerVisualMethodsOverride::SetValue_2 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionContainerVisualMethodsOverride::GetValue_1 ($prop, $field)
	 * @uses ServerCompositionContainerVisualMethodsOverride::GetValue_2 ($prop, $field)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionContainerVisualMethodsOverride::SetAnimatedValue_1 ($prop, $field, $committedAt, $animation)
	 * @uses ServerCompositionContainerVisualMethodsOverride::SetAnimatedValue_2 ($property, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAnimatedValue(mixed ...$args){}
}
