<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionSimpleImageBrushMethodsOverride
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
class ServerCompositionSimpleImageBrush extends \Avalonia\Rendering\Composition\Server\ServerCompositionSimpleTileBrush implements 
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImageBrush,
	\Avalonia\Media\ITileBrush,
	\Avalonia\Media\IImageBrushSource
{
	/**
	 * @return \Avalonia\Media\IImageBrushSource
	 */
	public  function get_Source(){}
	/**
	 * @return \Avalonia\Utilities\IRef_1
	 */
	public  function get_Bitmap(){}
	/**
	 * @param \Avalonia\Utilities\IRef_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Bitmap($value){}
	/**
	 * @uses ServerCompositionSimpleImageBrushMethodsOverride::get_Transform_1 ()
	 * @uses ServerCompositionSimpleImageBrushMethodsOverride::get_Transform_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Transform(mixed ...$args){}
	/**
	 * @uses ServerCompositionSimpleImageBrushMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionSimpleImageBrushMethodsOverride::SetValue_2 ($field, $value)
	 * @uses ServerCompositionSimpleImageBrushMethodsOverride::SetValue_3 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}
