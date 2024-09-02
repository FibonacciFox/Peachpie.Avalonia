<?php
namespace Avalonia\Media;
final class GeometryDrawing extends \Avalonia\Media\Drawing implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Geometry]
	 */
	public static $GeometryProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 */
	public static $BrushProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IPen]
	 */
	public static $PenProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\Geometry
	 */
	public $Geometry;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Brush;
	/**
	 * @property
	 * @var \Avalonia\Media\IPen
	 */
	public $Pen;
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