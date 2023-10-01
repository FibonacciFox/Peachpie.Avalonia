<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionSurfaceVisualMethodsOverride
{
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionSurfaceVisual
	 */
	#[MethodOverride] protected  function get_Server_1(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionContainerVisual
	 */
	#[MethodOverride] protected  function get_Server_2(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 */
	#[MethodOverride] protected  function get_Server_3(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\SimpleServerObject
	 */
	#[MethodOverride] protected  function get_Server_4(){}
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
class CompositionSurfaceVisual extends \Avalonia\Rendering\Composition\CompositionContainerVisual implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	/**
	 * @uses CompositionSurfaceVisualMethodsOverride::get_Server_1 ()
	 * @uses CompositionSurfaceVisualMethodsOverride::get_Server_2 ()
	 * @uses CompositionSurfaceVisualMethodsOverride::get_Server_3 ()
	 * @uses CompositionSurfaceVisualMethodsOverride::get_Server_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Server(mixed ...$args){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionSurface
	 */
	public  function get_Surface(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionSurface $value
	 * @return \System\Void|void
	 */
	public  function set_Surface($value){}
	/**
	 * @uses CompositionSurfaceVisualMethodsOverride::StartAnimation_1 ($propertyName, $animation, $finalValue)
	 * @uses CompositionSurfaceVisualMethodsOverride::StartAnimation_2 ($propertyName, $animation)
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
	 * @uses CompositionSurfaceVisualMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionSurfaceVisualMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
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
