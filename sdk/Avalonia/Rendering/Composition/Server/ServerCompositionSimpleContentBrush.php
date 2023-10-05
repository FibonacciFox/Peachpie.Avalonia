<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionSimpleContentBrushMethodsOverride
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
class ServerCompositionSimpleContentBrush extends \Avalonia\Rendering\Composition\Server\ServerCompositionSimpleTileBrush implements 
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\ITileBrush,
	\Avalonia\Media\ISceneBrush
{
	/**
	 * @var \Avalonia\Media\AlignmentX
	 * @property
	 */
	public $AlignmentX;
	/**
	 * @var \Avalonia\Media\AlignmentY
	 * @property
	 */
	public $AlignmentY;
	/**
	 * @var \Avalonia\RelativeRect
	 * @property
	 */
	public $DestinationRect;
	/**
	 * @var \Avalonia\RelativeRect
	 * @property
	 */
	public $SourceRect;
	/**
	 * @var \Avalonia\Media\Stretch
	 * @property
	 */
	public $Stretch;
	/**
	 * @var \Avalonia\Media\TileMode
	 * @property
	 */
	public $TileMode;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Opacity;
	/**
	 * @var \Avalonia\RelativePoint
	 * @property
	 */
	public $TransformOrigin;
	/**
	 * @var \Avalonia\Media\ITransform
	 * @property
	 */
	public $Transform;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @return \Avalonia\Media\ISceneBrushContent
	 */
	public  function CreateContent(){}
	/**
	 * @uses ServerCompositionSimpleContentBrushMethodsOverride::get_Transform_1 ()
	 * @uses ServerCompositionSimpleContentBrushMethodsOverride::get_Transform_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Transform(mixed ...$args){}
	/**
	 * @uses ServerCompositionSimpleContentBrushMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionSimpleContentBrushMethodsOverride::SetValue_2 ($field, $value)
	 * @uses ServerCompositionSimpleContentBrushMethodsOverride::SetValue_3 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}
