<?php
namespace Avalonia\Platform;
class Screen extends \System\Object
{

	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Scaling;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $PixelDensity;
	/**
	 * @property
	 * @var \Avalonia\PixelRect
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \Avalonia\PixelRect
	 * @since readonly
	 */
	public $WorkingArea;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsPrimary;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Primary;
	/**
	 * @param \System\Double|double $scaling
	 * @param \Avalonia\PixelRect $bounds
	 * @param \Avalonia\PixelRect $workingArea
	 * @param \System\Boolean|bool $isPrimary
	 */
	public function __construct($scaling, $bounds, $workingArea, $isPrimary){}
}