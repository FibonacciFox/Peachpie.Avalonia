<?php
namespace Avalonia\Media;
final class QuadraticBezierSegment extends \Avalonia\Media\PathSegment implements
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
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}