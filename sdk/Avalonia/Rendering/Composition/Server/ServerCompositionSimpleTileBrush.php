<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionSimpleTileBrushMethodsOverride
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
class ServerCompositionSimpleTileBrush extends \Avalonia\Rendering\Composition\Server\ServerCompositionSimpleBrush implements 
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IBrush
{
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfAlignmentXProperty;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfAlignmentYProperty;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfDestinationRectProperty;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfSourceRectProperty;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfStretchProperty;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfTileModeProperty;
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
	 * @return \Avalonia\Media\AlignmentX
	 */
	public  function get_AlignmentX(){}
	/**
	 * @param \Avalonia\Media\AlignmentX $value
	 * @return \System\Void|void
	 */
	public  function set_AlignmentX($value){}
	/**
	 * @return \Avalonia\Media\AlignmentY
	 */
	public  function get_AlignmentY(){}
	/**
	 * @param \Avalonia\Media\AlignmentY $value
	 * @return \System\Void|void
	 */
	public  function set_AlignmentY($value){}
	/**
	 * @return \Avalonia\RelativeRect
	 */
	public  function get_DestinationRect(){}
	/**
	 * @param \Avalonia\RelativeRect $value
	 * @return \System\Void|void
	 */
	public  function set_DestinationRect($value){}
	/**
	 * @return \Avalonia\RelativeRect
	 */
	public  function get_SourceRect(){}
	/**
	 * @param \Avalonia\RelativeRect $value
	 * @return \System\Void|void
	 */
	public  function set_SourceRect($value){}
	/**
	 * @return \Avalonia\Media\Stretch
	 */
	public  function get_Stretch(){}
	/**
	 * @param \Avalonia\Media\Stretch $value
	 * @return \System\Void|void
	 */
	public  function set_Stretch($value){}
	/**
	 * @return \Avalonia\Media\TileMode
	 */
	public  function get_TileMode(){}
	/**
	 * @param \Avalonia\Media\TileMode $value
	 * @return \System\Void|void
	 */
	public  function set_TileMode($value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @param \Avalonia\Media\AlignmentX $alignmentX
	 * @param \Avalonia\Media\AlignmentY $alignmentY
	 * @param \Avalonia\RelativeRect $destinationRect
	 * @param \Avalonia\RelativeRect $sourceRect
	 * @param \Avalonia\Media\Stretch $stretch
	 * @param \Avalonia\Media\TileMode $tileMode
	 * @return \System\Void|void
	 */
	protected static function SerializeAllChanges($writer, $alignmentX, $alignmentY, $destinationRect, $sourceRect, $stretch, $tileMode){}
	/**
	 * @uses ServerCompositionSimpleTileBrushMethodsOverride::get_Transform_1 ()
	 * @uses ServerCompositionSimpleTileBrushMethodsOverride::get_Transform_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Transform(mixed ...$args){}
	/**
	 * @uses ServerCompositionSimpleTileBrushMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionSimpleTileBrushMethodsOverride::SetValue_2 ($field, $value)
	 * @uses ServerCompositionSimpleTileBrushMethodsOverride::SetValue_3 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
}
