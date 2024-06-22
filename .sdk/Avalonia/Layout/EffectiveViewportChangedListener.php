<?php
namespace Avalonia\Layout;
class EffectiveViewportChangedListener extends \System\Object
{

	/**
	 * @property
	 * @var \Avalonia\Layout\Layoutable
	 * @since readonly
	 */
	public $Listener;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $Viewport;
	/**
	 * @param \Avalonia\Layout\Layoutable $listener
	 * @param \Avalonia\Rect $viewport
	 */
	public function __construct($listener, $viewport){}
}