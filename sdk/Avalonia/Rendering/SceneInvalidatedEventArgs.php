<?php
namespace Avalonia\Rendering;
/**
 */
class SceneInvalidatedEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $DirtyRect;
	/**
	 * @var \Avalonia\Rendering\IRenderRoot
	 * @property
	 */
	public readonly $RenderRoot;
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_DirtyRect(){}
	/**
	 * @return \Avalonia\Rendering\IRenderRoot
	 */
	public  function get_RenderRoot(){}
}
