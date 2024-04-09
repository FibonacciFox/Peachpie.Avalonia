<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
class RenderDataBitmapNode extends \System\Object implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable
{
	/**
	 * @property
	 * @var \Avalonia\Utilities\IRef_1[Avalonia\Platform\IBitmapImpl]
	 */
	public $Bitmap;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $SourceRect;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $DestRect;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean|bool
	 */
	public function HitTest($p){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 * @return \System\Void|void
	 */
	public function Invoke($context){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 */
	public function __construct(){}
}