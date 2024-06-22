<?php
namespace Avalonia\Media;
class StreamGeometry extends \Avalonia\Media\Geometry implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{

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
	/**
	 * @return \Avalonia\Media\StreamGeometryContext
	 */
	public function Open(){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}