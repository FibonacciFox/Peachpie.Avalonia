<?php
namespace Avalonia\Layout;
/**
 */
class EffectiveViewportChangedEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $EffectiveViewport;
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_EffectiveViewport(){}
}
