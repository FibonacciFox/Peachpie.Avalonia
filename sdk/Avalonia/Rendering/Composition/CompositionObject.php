<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionObjectMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartAnimation_1($propertyName, $animation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function StartAnimation_2($propertyName, $animation, $finalValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartAnimationGroup_1($grp){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function StartAnimationGroup_2($grp, $target, $finalValue){}
}
/**
 */
class CompositionObject extends \System\Object implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\ImplicitAnimationCollection
	 */
	public  function get_ImplicitAnimations(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Animations\ImplicitAnimationCollection $value
	 * @return \System\Void|void
	 */
	public  function set_ImplicitAnimations($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	public  function get_Compositor(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\SimpleServerObject
	 */
	protected  function get_Server(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDisposed(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsDisposed($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowInvalidOperation(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Dispose(){}
	/**
	 * @uses CompositionObjectMethodsOverride::StartAnimation_1 ($propertyName, $animation)
	 * @uses CompositionObjectMethodsOverride::StartAnimation_2 ($propertyName, $animation, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @uses CompositionObjectMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionObjectMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimationGroup(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Animations\CompositionAnimation $animation
	 * @param \System\String|string $target
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant $finalValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StartAnimationGroupPart($animation, $target, $finalValue){}
	/**
	 * @return \System\Void|void
	 */
	protected  function RegisterForSerialization(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SerializeChanges($c, $writer){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @return \System\Void|void
	 */
	protected  function SerializeChangesCore($writer){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
