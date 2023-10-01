<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionSimplePenMethodsOverride
{
	/**
	 * @return \Avalonia\Media\IDashStyle
	 */
	#[MethodOverride] private  function get_DashStyle_1(){}
	/**
	 * @return \Avalonia\Media\Immutable\ImmutableDashStyle
	 */
	#[MethodOverride] public  function get_DashStyle_2(){}
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
class ServerCompositionSimplePen extends \Avalonia\Rendering\Composition\Server\SimpleServerRenderResource implements 
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IPen
{
	/**
	 * @uses ServerCompositionSimplePenMethodsOverride::get_DashStyle_1 ()
	 * @uses ServerCompositionSimplePenMethodsOverride::get_DashStyle_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_DashStyle(mixed ...$args){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_Brush(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_Brush($value){}
	/**
	 * @param \Avalonia\Media\Immutable\ImmutableDashStyle $value
	 * @return \System\Void|void
	 */
	public  function set_DashStyle($value){}
	/**
	 * @return \Avalonia\Media\PenLineCap
	 */
	public  function get_LineCap(){}
	/**
	 * @param \Avalonia\Media\PenLineCap $value
	 * @return \System\Void|void
	 */
	public  function set_LineCap($value){}
	/**
	 * @return \Avalonia\Media\PenLineJoin
	 */
	public  function get_LineJoin(){}
	/**
	 * @param \Avalonia\Media\PenLineJoin $value
	 * @return \System\Void|void
	 */
	public  function set_LineJoin($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_MiterLimit(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_MiterLimit($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Thickness(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Thickness($value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \Avalonia\Media\Immutable\ImmutableDashStyle $dashStyle
	 * @param \Avalonia\Media\PenLineCap $lineCap
	 * @param \Avalonia\Media\PenLineJoin $lineJoin
	 * @param \System\Double|double $miterLimit
	 * @param \System\Double|double $thickness
	 * @return \System\Void|void
	 */
	protected static function SerializeAllChanges($writer, $brush, $dashStyle, $lineCap, $lineJoin, $miterLimit, $thickness){}
	/**
	 * @uses ServerCompositionSimplePenMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionSimplePenMethodsOverride::SetValue_2 ($field, $value)
	 * @uses ServerCompositionSimplePenMethodsOverride::SetValue_3 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}
