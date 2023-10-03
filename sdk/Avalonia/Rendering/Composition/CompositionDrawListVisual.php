<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionDrawListVisualMethodsOverride
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
class CompositionDrawListVisual extends \Avalonia\Rendering\Composition\CompositionContainerVisual implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	/**
	 * @return \Avalonia\Visual
	 */
	public  function get_Visual(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Drawing\CompositionRenderData
	 */
	public  function get_DrawList(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\CompositionRenderData $value
	 * @return \System\Void|void
	 */
	public  function set_DrawList($value){}
	/**
	 * @uses CompositionDrawListVisualMethodsOverride::get_Server_1 ()
	 * @uses CompositionDrawListVisualMethodsOverride::get_Server_2 ()
	 * @uses CompositionDrawListVisualMethodsOverride::get_Server_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Server(mixed ...$args){}
	/**
	 * @uses CompositionDrawListVisualMethodsOverride::StartAnimation_1 ($propertyName, $animation, $finalValue)
	 * @uses CompositionDrawListVisualMethodsOverride::StartAnimation_2 ($propertyName, $animation)
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
	 * @uses CompositionDrawListVisualMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionDrawListVisualMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
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
