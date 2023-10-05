<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextShaperOptionsMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class TextShaperOptions extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Media\IGlyphTypeface
	 * @property
	 */
	public readonly $Typeface;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $FontRenderingEmSize;
	/**
	 * @var \System\SByte
	 * @property
	 */
	public readonly $BidiLevel;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public readonly $Culture;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $IncrementalTabWidth;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $LetterSpacing;
	/**
	 * @return \Avalonia\Media\IGlyphTypeface
	 */
	public  function get_Typeface(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_FontRenderingEmSize(){}
	/**
	 * @return \System\SByte
	 */
	public  function get_BidiLevel(){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public  function get_Culture(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_IncrementalTabWidth(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_LetterSpacing(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $left
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $left
	 * @param \Avalonia\Media\TextFormatting\TextShaperOptions $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses TextShaperOptionsMethodsOverride::Equals_1 ($obj)
	 * @uses TextShaperOptionsMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
