<?php
namespace Avalonia\Media;
final class DrawingGroup extends \Avalonia\Media\Drawing implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $OpacityProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Transform]
	 */
	public static $TransformProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Geometry]
	 */
	public static $ClipGeometryProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 */
	public static $OpacityMaskProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Media\DrawingGroup,Avalonia\Media\DrawingCollection]
	 */
	public static $ChildrenProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\Media\Transform
	 */
	public $Transform;
	/**
	 * @property
	 * @var \Avalonia\Media\Geometry
	 */
	public $ClipGeometry;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $OpacityMask;
	/**
	 * @property
	 * @var \Avalonia\Media\DrawingCollection
	 */
	public $Children;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @return \Avalonia\Media\DrawingContext
	 */
	public function Open(){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}