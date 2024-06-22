<?php
namespace Avalonia\Controls;
class PixelPointEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \Avalonia\PixelPoint
	 * @since readonly
	 */
	public $Point;
	/**
	 * @param \Avalonia\PixelPoint $point
	 */
	public function __construct($point){}
}