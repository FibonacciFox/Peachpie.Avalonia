<?php
namespace Avalonia\Rendering;
/**
 */
class SceneInvalidatedEventArgs extends \System\EventArgs
{
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_DirtyRect(){}
	/**
	 * @return \Avalonia\Rendering\IRenderRoot
	 */
	public  function get_RenderRoot(){}
}
