<?php
namespace Avalonia\Media;
final class PathFigure extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsClosedProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Boolean]
	 */
	public static $IsFilledProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Media\PathFigure,Avalonia\Media\PathSegments]
	 */
	public static $SegmentsProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Point]
	 */
	public static $StartPointProperty;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsClosed;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsFilled;
	/**
	 * @property
	 * @var \Avalonia\Media\PathSegments
	 */
	public $Segments;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $StartPoint;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	protected function add_SegmentsInvalidated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	protected function remove_SegmentsInvalidated($value){}
	private function OnSegmentsChanged(){}
	private function InvalidateSegments(){}
	/**
	 * @param \Avalonia\Media\StreamGeometryContext $ctx
	 * @return \System\Void|void
	 */
	protected function ApplyTo($ctx){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}