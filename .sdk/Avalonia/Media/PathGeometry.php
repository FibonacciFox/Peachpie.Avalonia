<?php
namespace Avalonia\Media;
class PathGeometry extends \Avalonia\Media\StreamGeometry implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Media\PathGeometry,Avalonia\Media\PathFigures]
	 */
	public static $FiguresProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\FillRule]
	 */
	public static $FillRuleProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\PathFigures
	 */
	public $Figures;
	/**
	 * @property
	 * @var \Avalonia\Media\FillRule
	 */
	public $FillRule;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \Avalonia\Media\Transform
	 */
	public $Transform;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $ContourLength;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	private function OnFiguresChanged($figures){}
	private function InvalidateGeometryFromSegments($_, $__){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}