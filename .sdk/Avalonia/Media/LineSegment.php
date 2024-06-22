<?php
namespace Avalonia\Media;
final class LineSegment extends \Avalonia\Media\PathSegment implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Point]
	 */
	public static $PointProperty;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $Point;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}