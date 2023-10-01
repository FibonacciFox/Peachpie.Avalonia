<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionSimpleLinearGradientBrushMethodsOverride
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
class ServerCompositionSimpleLinearGradientBrush extends \Avalonia\Rendering\Composition\Server\ServerCompositionSimpleGradientBrush implements 
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\ILinearGradientBrush
{
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_StartPoint(){}
	/**
	 * @param \Avalonia\RelativePoint $value
	 * @return \System\Void|void
	 */
	public  function set_StartPoint($value){}
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_EndPoint(){}
	/**
	 * @param \Avalonia\RelativePoint $value
	 * @return \System\Void|void
	 */
	public  function set_EndPoint($value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @param \Avalonia\RelativePoint $startPoint
	 * @param \Avalonia\RelativePoint $endPoint
	 * @return \System\Void|void
	 */
	protected static function SerializeAllChanges($writer, $startPoint, $endPoint){}
	/**
	 * @uses ServerCompositionSimpleLinearGradientBrushMethodsOverride::get_Transform_1 ()
	 * @uses ServerCompositionSimpleLinearGradientBrushMethodsOverride::get_Transform_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Transform(mixed ...$args){}
	/**
	 * @uses ServerCompositionSimpleLinearGradientBrushMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionSimpleLinearGradientBrushMethodsOverride::SetValue_2 ($field, $value)
	 * @uses ServerCompositionSimpleLinearGradientBrushMethodsOverride::SetValue_3 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}
