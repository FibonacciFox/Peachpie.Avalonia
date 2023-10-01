<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionSolidColorVisualMethodsOverride
{
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionSolidColorVisual
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
class CompositionSolidColorVisual extends \Avalonia\Rendering\Composition\CompositionContainerVisual implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	/**
	 * @uses CompositionSolidColorVisualMethodsOverride::get_Server_1 ()
	 * @uses CompositionSolidColorVisualMethodsOverride::get_Server_2 ()
	 * @uses CompositionSolidColorVisualMethodsOverride::get_Server_3 ()
	 * @uses CompositionSolidColorVisualMethodsOverride::get_Server_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Server(mixed ...$args){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_Color(){}
	/**
	 * @param \Avalonia\Media\Color $value
	 * @return \System\Void|void
	 */
	public  function set_Color($value){}
	/**
	 * @uses CompositionSolidColorVisualMethodsOverride::StartAnimation_1 ($propertyName, $animation, $finalValue)
	 * @uses CompositionSolidColorVisualMethodsOverride::StartAnimation_2 ($propertyName, $animation)
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
	 * @uses CompositionSolidColorVisualMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionSolidColorVisualMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
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
