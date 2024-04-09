<?php
namespace Avalonia\Media;
final class ArcSegment extends \Avalonia\Media\PathSegment implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsLargeArcProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Point]
	 */
	public static $PointProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $RotationAngleProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Size]
	 */
	public static $SizeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\SweepDirection]
	 */
	public static $SweepDirectionProperty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsLargeArc;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $Point;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $RotationAngle;
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $Size;
	/**
	 * @property
	 * @var \Avalonia\Media\SweepDirection
	 */
	public $SweepDirection;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}