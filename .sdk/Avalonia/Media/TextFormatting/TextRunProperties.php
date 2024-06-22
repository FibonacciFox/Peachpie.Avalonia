<?php
namespace Avalonia\Media\TextFormatting;
class TextRunProperties extends \System\Object implements
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
	 * @var \System\Globalization\CultureInfo
	 * @since readonly
	 */
	public $CultureInfo;
	/**
	 * @property
	 * @var \Avalonia\Media\BaselineAlignment
	 * @since readonly
	 */
	public $BaselineAlignment;
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $left
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $left
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Typeface $typeface
	 * @return \Avalonia\Media\TextFormatting\TextRunProperties
	 */
	protected function WithTypeface($typeface){}
}