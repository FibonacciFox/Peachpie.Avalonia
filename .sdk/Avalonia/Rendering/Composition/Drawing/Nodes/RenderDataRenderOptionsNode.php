<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
class RenderDataRenderOptionsNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable
{

	/**
	 * @field
	 * @var \Avalonia\Utilities\PooledInlineList_1[Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem]
	 */
	public $Children;
	/**
	 * @property
	 * @var \Avalonia\Media\RenderOptions
	 */
	public $RenderOptions;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @since readonly
	 */
	public $Bounds;
	/**
	 */
	public function __construct(){}
}