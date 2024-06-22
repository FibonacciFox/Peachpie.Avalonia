<?php
namespace Avalonia\Layout;
class EffectiveViewportChangedEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $EffectiveViewport;
	/**
	 * @param \Avalonia\Rect $effectiveViewport
	 */
	public function __construct($effectiveViewport){}
}