<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionSimpleSolidColorBrushMethodsOverride
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
class ServerCompositionSimpleSolidColorBrush extends \Avalonia\Rendering\Composition\Server\ServerCompositionSimpleBrush implements 
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\ISolidColorBrush
{
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
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @param \Avalonia\Media\Color $color
	 * @return \System\Void|void
	 */
	protected static function SerializeAllChanges($writer, $color){}
	/**
	 * @uses ServerCompositionSimpleSolidColorBrushMethodsOverride::get_Transform_1 ()
	 * @uses ServerCompositionSimpleSolidColorBrushMethodsOverride::get_Transform_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Transform(mixed ...$args){}
	/**
	 * @uses ServerCompositionSimpleSolidColorBrushMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionSimpleSolidColorBrushMethodsOverride::SetValue_2 ($field, $value)
	 * @uses ServerCompositionSimpleSolidColorBrushMethodsOverride::SetValue_3 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}
