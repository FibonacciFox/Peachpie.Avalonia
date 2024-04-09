<?php
namespace Avalonia\Media\TextFormatting;
class GenericTextRunProperties extends \Avalonia\Media\TextFormatting\TextRunProperties implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \Avalonia\Media\Typeface
	 * @since readonly
	 */
	public $Typeface;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $FontRenderingEmSize;
	/**
	 * @property
	 * @var \Avalonia\Media\TextDecorationCollection
	 * @since readonly
	 */
	public $TextDecorations;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 * @since readonly
	 */
	public $ForegroundBrush;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 * @since readonly
	 */
	public $BackgroundBrush;
	/**
	 * @property
	 * @var \Avalonia\Media\BaselineAlignment
	 * @since readonly
	 */
	public $BaselineAlignment;
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 * @since readonly
	 */
	public $CultureInfo;
	/**
	 * @param \Avalonia\Media\Typeface $typeface
	 * @param \System\Double|double $fontRenderingEmSize
	 * @param \Avalonia\Media\TextDecorationCollection $textDecorations
	 * @param \Avalonia\Media\IBrush $foregroundBrush
	 * @param \Avalonia\Media\IBrush $backgroundBrush
	 * @param \Avalonia\Media\BaselineAlignment $baselineAlignment
	 * @param \System\Globalization\CultureInfo $cultureInfo
	 */
	public function __construct($typeface, $fontRenderingEmSize, $textDecorations, $foregroundBrush, $backgroundBrush, $baselineAlignment, $cultureInfo){}
}