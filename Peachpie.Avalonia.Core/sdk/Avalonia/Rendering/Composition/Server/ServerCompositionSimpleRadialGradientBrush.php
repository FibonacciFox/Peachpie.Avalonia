<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionSimpleRadialGradientBrushMethodsOverride
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
class ServerCompositionSimpleRadialGradientBrush extends \Avalonia\Rendering\Composition\Server\ServerCompositionSimpleGradientBrush implements 
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IRadialGradientBrush
{
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_Center(){}
	/**
	 * @param \Avalonia\RelativePoint $value
	 * @return \System\Void|void
	 */
	public  function set_Center($value){}
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_GradientOrigin(){}
	/**
	 * @param \Avalonia\RelativePoint $value
	 * @return \System\Void|void
	 */
	public  function set_GradientOrigin($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Radius(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Radius($value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @param \Avalonia\RelativePoint $center
	 * @param \Avalonia\RelativePoint $gradientOrigin
	 * @param \System\Double|double $radius
	 * @return \System\Void|void
	 */
	protected static function SerializeAllChanges($writer, $center, $gradientOrigin, $radius){}
	/**
	 * @uses ServerCompositionSimpleRadialGradientBrushMethodsOverride::get_Transform_1 ()
	 * @uses ServerCompositionSimpleRadialGradientBrushMethodsOverride::get_Transform_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Transform(mixed ...$args){}
	/**
	 * @uses ServerCompositionSimpleRadialGradientBrushMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionSimpleRadialGradientBrushMethodsOverride::SetValue_2 ($field, $value)
	 * @uses ServerCompositionSimpleRadialGradientBrushMethodsOverride::SetValue_3 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}
