<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionExperimentalAcrylicVisualMethodsOverride
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
class CompositionExperimentalAcrylicVisual extends \Avalonia\Rendering\Composition\CompositionDrawListVisual implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeDefaults(){}
	/**
	 * @uses CompositionExperimentalAcrylicVisualMethodsOverride::get_Server_1 ()
	 * @uses CompositionExperimentalAcrylicVisualMethodsOverride::get_Server_2 ()
	 * @uses CompositionExperimentalAcrylicVisualMethodsOverride::get_Server_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Server(mixed ...$args){}
	/**
	 * @uses CompositionExperimentalAcrylicVisualMethodsOverride::StartAnimation_1 ($propertyName, $animation, $finalValue)
	 * @uses CompositionExperimentalAcrylicVisualMethodsOverride::StartAnimation_2 ($propertyName, $animation)
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
	 * @uses CompositionExperimentalAcrylicVisualMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionExperimentalAcrylicVisualMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
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
