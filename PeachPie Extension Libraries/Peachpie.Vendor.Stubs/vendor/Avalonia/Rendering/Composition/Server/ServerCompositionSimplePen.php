<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ServerCompositionSimplePenOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Media\IDashStyle
	 */
	#[MethodOverride]private function get_DashStyle_1 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\Media\Immutable\ImmutableDashStyle
	 */
	#[MethodOverride]public function get_DashStyle_2 (){}
}
class ServerCompositionSimplePen extends \Avalonia\Rendering\Composition\Server\SimpleServerRenderResource implements
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IPen
{
	use ServerCompositionSimplePenOverride;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfBrushProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfDashStyleProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfLineCapProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfLineJoinProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfMiterLimitProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfThicknessProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Brush;
	/**
	 * @property
	 * @var \Avalonia\Media\Immutable\ImmutableDashStyle
	 */
	public $DashStyle;
	/**
	 * @property
	 * @var \Avalonia\Media\PenLineCap
	 */
	public $LineCap;
	/**
	 * @property
	 * @var \Avalonia\Media\PenLineJoin
	 */
	public $LineJoin;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MiterLimit;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Thickness;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @since readonly
	 */
	public $Compositor;
	/**
	 * @uses ServerCompositionSimplePenOverride::get_DashStyle_1 <br>private , args: ()<br>
	 * @uses ServerCompositionSimplePenOverride::get_DashStyle_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\IDashStyle|\Avalonia\Media\Immutable\ImmutableDashStyle|mixed|\override
	 */
	#[MethodOverridePublic]function get_DashStyle (){}
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
}