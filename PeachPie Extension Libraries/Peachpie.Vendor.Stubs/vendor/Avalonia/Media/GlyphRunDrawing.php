<?php
namespace Avalonia\Media;
final class GlyphRunDrawing extends \Avalonia\Media\Drawing implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 */
	public static $ForegroundProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\GlyphRun]
	 */
	public static $GlyphRunProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Foreground;
	/**
	 * @property
	 * @var \Avalonia\Media\GlyphRun
	 */
	public $GlyphRun;
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