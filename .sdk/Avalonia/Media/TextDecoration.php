<?php
namespace Avalonia\Media;
class TextDecoration extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\TextDecorationLocation]
	 */
	public static $LocationProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 */
	public static $StrokeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\TextDecorationUnit]
	 */
	public static $StrokeThicknessUnitProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Collections\AvaloniaList_1[System\Double]]
	 */
	public static $StrokeDashArrayProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $StrokeDashOffsetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $StrokeThicknessProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\PenLineCap]
	 */
	public static $StrokeLineCapProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $StrokeOffsetProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\TextDecorationUnit]
	 */
	public static $StrokeOffsetUnitProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\TextDecorationLocation
	 */
	public $Location;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Stroke;
	/**
	 * @property
	 * @var \Avalonia\Media\TextDecorationUnit
	 */
	public $StrokeThicknessUnit;
	/**
	 * @property
	 * @var \Avalonia\Collections\AvaloniaList_1[System\Double]
	 */
	public $StrokeDashArray;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $StrokeDashOffset;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $StrokeThickness;
	/**
	 * @property
	 * @var \Avalonia\Media\PenLineCap
	 */
	public $StrokeLineCap;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $StrokeOffset;
	/**
	 * @property
	 * @var \Avalonia\Media\TextDecorationUnit
	 */
	public $StrokeOffsetUnit;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \Avalonia\Media\DrawingContext $drawingContext
	 * @param \Avalonia\Media\GlyphRun $glyphRun
	 * @param \Avalonia\Media\TextFormatting\TextMetrics $textMetrics
	 * @param \Avalonia\Media\IBrush $defaultBrush
	 * @return \System\Void|void
	 */
	protected function Draw($drawingContext, $glyphRun, $textMetrics, $defaultBrush){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}