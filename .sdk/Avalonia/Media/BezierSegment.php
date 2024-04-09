<?php
namespace Avalonia\Media;
final class BezierSegment extends \Avalonia\Media\PathSegment implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Point]
	 */
	public static $Point1Property;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Point]
	 */
	public static $Point2Property;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Point]
	 */
	public static $Point3Property;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $Point1;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $Point2;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $Point3;
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