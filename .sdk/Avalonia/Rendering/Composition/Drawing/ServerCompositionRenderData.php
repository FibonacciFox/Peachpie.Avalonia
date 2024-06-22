<?php
namespace Avalonia\Rendering\Composition\Drawing;
class ServerCompositionRenderData extends \Avalonia\Rendering\Composition\Server\SimpleServerRenderResource implements
	\Avalonia\Rendering\Composition\Server\IServerRenderResource,
	\Avalonia\Rendering\Composition\Server\IServerRenderResourceObserver,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @since readonly
	 */
	public $Bounds;
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
	private static function CollectResources($items, $collector){}
	private function CalculateRenderBounds(){}
	/**
	 * @param \System\Nullable_1 $rect [generic: Avalonia\Rect]
	 * @return \System\Nullable_1[Avalonia\Rect]
	 */
	public static function ApplyRenderBoundsRounding($rect){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @return \System\Void|void
	 */
	public function Render($context){}
	private function Reset(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositor $compositor
	 */
	public function __construct($compositor){}
}