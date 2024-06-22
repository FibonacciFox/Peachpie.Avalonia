<?php
namespace Avalonia\Rendering;
class SceneInvalidatedEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $DirtyRect;
	/**
	 * @property
	 * @var \Avalonia\Rendering\IRenderRoot
	 * @since readonly
	 */
	public $RenderRoot;
	/**
	 * @param \Avalonia\Rendering\IRenderRoot $root
	 * @param \Avalonia\Rect $dirtyRect
	 */
	public function __construct($root, $dirtyRect){}
}