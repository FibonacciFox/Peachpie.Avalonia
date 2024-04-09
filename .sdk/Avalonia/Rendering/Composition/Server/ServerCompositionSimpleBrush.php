<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ServerCompositionSimpleBrushOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Media\ITransform
	 */
	#[MethodOverride]private function get_Transform_1 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\Media\ITransform
	 */
	#[MethodOverride]public function get_Transform_2 (){}
}
class ServerCompositionSimpleBrush extends \Avalonia\Rendering\Composition\Server\SimpleServerRenderResource implements
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable,
	\Avalonia\Media\IBrush
{
	use ServerCompositionSimpleBrushOverride;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfOpacityProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfTransformOriginProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfTransformProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $TransformOrigin;
	/**
	 * @property
	 * @var \Avalonia\Media\ITransform
	 */
	public $Transform;
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
	 * @uses ServerCompositionSimpleBrushOverride::get_Transform_1 <br>private , args: ()<br>
	 * @uses ServerCompositionSimpleBrushOverride::get_Transform_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\ITransform|mixed|\override
	 */
	#[MethodOverridePublic]function get_Transform (){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @param \System\Double|double $opacity
	 * @param \Avalonia\RelativePoint $transformOrigin
	 * @param \Avalonia\Media\ITransform $transform
	 * @return \System\Void|void
	 */
	protected static function SerializeAllChanges($writer, $opacity, $transformOrigin, $transform){}
}