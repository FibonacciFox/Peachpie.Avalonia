<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionSimpleGradientBrushMethodsOverride
{
	/**
	 * @return \Avalonia\Media\ITransform
	 */
	#[MethodOverride] private  function get_Transform_1(){}
	/**
	 * @return \Avalonia\Media\ITransform
	 */
	#[MethodOverride] public  function get_Transform_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_1($prop, $field, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_2($field, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_3($prop, $field, $value){}
}
/**
 */
class ServerCompositionSimpleGradientBrush extends \Avalonia\Rendering\Composition\Server\ServerCompositionSimpleBrush implements 
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IGradientBrush
{
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_GradientStops(){}
	/**
	 * @return \Avalonia\Media\GradientSpreadMethod
	 */
	public  function get_SpreadMethod(){}
	/**
	 * @param \Avalonia\Media\GradientSpreadMethod $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_SpreadMethod($value){}
	/**
	 * @uses ServerCompositionSimpleGradientBrushMethodsOverride::get_Transform_1 ()
	 * @uses ServerCompositionSimpleGradientBrushMethodsOverride::get_Transform_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Transform(mixed ...$args){}
	/**
	 * @uses ServerCompositionSimpleGradientBrushMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionSimpleGradientBrushMethodsOverride::SetValue_2 ($field, $value)
	 * @uses ServerCompositionSimpleGradientBrushMethodsOverride::SetValue_3 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}
