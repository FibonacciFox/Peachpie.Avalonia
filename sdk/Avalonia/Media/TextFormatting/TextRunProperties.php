<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextRunPropertiesMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class TextRunProperties extends \System\Object implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Media\Typeface
	 * @property
	 */
	public readonly $Typeface;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $FontRenderingEmSize;
	/**
	 * @var \Avalonia\Media\TextDecorationCollection
	 * @property
	 */
	public readonly $TextDecorations;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public readonly $ForegroundBrush;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public readonly $BackgroundBrush;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public readonly $CultureInfo;
	/**
	 * @var \Avalonia\Media\BaselineAlignment
	 * @property
	 */
	public readonly $BaselineAlignment;
	/**
	 * @return \Avalonia\Media\Typeface
	 */
	public  function get_Typeface(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_FontRenderingEmSize(){}
	/**
	 * @return \Avalonia\Media\TextDecorationCollection
	 */
	public  function get_TextDecorations(){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_ForegroundBrush(){}
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_BackgroundBrush(){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public  function get_CultureInfo(){}
	/**
	 * @return \Avalonia\Media\BaselineAlignment
	 */
	public  function get_BaselineAlignment(){}
	/**
	 * @return \Avalonia\Media\IGlyphTypeface
	 */
	protected  function get_CachedGlyphTypeface(){}
	/**
	 * @uses TextRunPropertiesMethodsOverride::Equals_1 ($other)
	 * @uses TextRunPropertiesMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $left
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $left
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Typeface $typeface
	 * @return \Avalonia\Media\TextFormatting\TextRunProperties
	 */
	protected  function WithTypeface($typeface){}
}
