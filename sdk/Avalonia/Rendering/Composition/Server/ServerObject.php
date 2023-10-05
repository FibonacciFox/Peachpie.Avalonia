<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerObjectMethodsOverride
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
class ServerObject extends \Avalonia\Rendering\Composition\Server\SimpleServerObject implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsActive;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsActive(){}
	/**
	 * @param \System\String|string $name
	 * @return \Avalonia\Rendering\Composition\Expressions\ExpressionVariant
	 */
	public  function GetPropertyForAnimation($name){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetProperty($name){}
	/**
	 * @return \System\Void|void
	 */
	public  function Activate(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Deactivate(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Activated(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Deactivated(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $property
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvalidateSubscriptions($property){}
	/**
	 * @uses ServerObjectMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerObjectMethodsOverride::SetValue_2 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ServerObjectMethodsOverride::GetValue_1 ($prop, $field)
	 * @uses ServerObjectMethodsOverride::GetValue_2 ($prop, $field)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ServerObjectMethodsOverride::SetAnimatedValue_1 ($prop, $field, $committedAt, $animation)
	 * @uses ServerObjectMethodsOverride::SetAnimatedValue_2 ($property, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAnimatedValue(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $property
	 * @param \Avalonia\Rendering\Composition\Server\T& $field
	 * @return \Avalonia\Rendering\Composition\Server\T
	 */
	protected  function GetAnimatedValue($property, $field){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $prop
	 * @return \System\Void|void
	 */
	public  function NotifyAnimatedValueChanged($prop){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $member
	 * @param \Avalonia\Rendering\Composition\Animations\IAnimationInstance $animation
	 * @return \System\Void|void
	 */
	public  function SubscribeToInvalidation($member, $animation){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\CompositionProperty $member
	 * @param \Avalonia\Rendering\Composition\Animations\IAnimationInstance $animation
	 * @return \System\Void|void
	 */
	public  function UnsubscribeFromInvalidation($member, $animation){}
	/**
	 * @param \System\String|string $fieldName
	 * @return \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	public  function GetCompositionProperty($fieldName){}
}
