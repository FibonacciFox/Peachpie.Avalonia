<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionBorderVisualMethodsOverride
{
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionContainerVisual
	 */
	#[MethodOverride] protected  function get_Server_1(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 */
	#[MethodOverride] protected  function get_Server_2(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\SimpleServerObject
	 */
	#[MethodOverride] protected  function get_Server_3(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function StartAnimation_1($propertyName, $animation, $finalValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartAnimation_2($propertyName, $animation){}
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
class CompositionBorderVisual extends \Avalonia\Rendering\Composition\CompositionDrawListVisual implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
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
	 * @uses CompositionBorderVisualMethodsOverride::get_Server_1 ()
	 * @uses CompositionBorderVisualMethodsOverride::get_Server_2 ()
	 * @uses CompositionBorderVisualMethodsOverride::get_Server_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Server(mixed ...$args){}
	/**
	 * @uses CompositionBorderVisualMethodsOverride::StartAnimation_1 ($propertyName, $animation, $finalValue)
	 * @uses CompositionBorderVisualMethodsOverride::StartAnimation_2 ($propertyName, $animation)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @uses CompositionBorderVisualMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionBorderVisualMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimationGroup(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SerializeChanges($c, $writer){}
}
