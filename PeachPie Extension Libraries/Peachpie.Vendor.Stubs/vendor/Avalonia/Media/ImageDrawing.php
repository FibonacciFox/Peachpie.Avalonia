<?php
namespace Avalonia\Media;
final class ImageDrawing extends \Avalonia\Media\Drawing implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IImage]
	 */
	public static $ImageSourceProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Rect]
	 */
	public static $RectProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\IImage
	 */
	public $ImageSource;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $Rect;
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