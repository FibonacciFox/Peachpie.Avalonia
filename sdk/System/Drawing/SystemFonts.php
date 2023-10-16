<?php
namespace System\Drawing;
/**
 */
class SystemFonts extends \System\Object
{
	/**
	 * @var \System\Drawing\Font
	 * @property
	 */
	public readonly $CaptionFont;
	/**
	 * @var \System\Drawing\Font
	 * @property
	 */
	public readonly $DefaultFont;
	/**
	 * @var \System\Drawing\Font
	 * @property
	 */
	public readonly $DialogFont;
	/**
	 * @var \System\Drawing\Font
	 * @property
	 */
	public readonly $IconTitleFont;
	/**
	 * @var \System\Drawing\Font
	 * @property
	 */
	public readonly $MenuFont;
	/**
	 * @var \System\Drawing\Font
	 * @property
	 */
	public readonly $MessageBoxFont;
	/**
	 * @var \System\Drawing\Font
	 * @property
	 */
	public readonly $SmallCaptionFont;
	/**
	 * @var \System\Drawing\Font
	 * @property
	 */
	public readonly $StatusFont;
	/**
	 * @return \System\Drawing\Font
	 */
	public static function get_CaptionFont(){}
	/**
	 * @return \System\Drawing\Font
	 */
	public static function get_DefaultFont(){}
	/**
	 * @return \System\Drawing\Font
	 */
	public static function get_DialogFont(){}
	/**
	 * @return \System\Drawing\Font
	 */
	public static function get_IconTitleFont(){}
	/**
	 * @return \System\Drawing\Font
	 */
	public static function get_MenuFont(){}
	/**
	 * @return \System\Drawing\Font
	 */
	public static function get_MessageBoxFont(){}
	/**
	 * @return \System\Drawing\Font
	 */
	public static function get_SmallCaptionFont(){}
	/**
	 * @return \System\Drawing\Font
	 */
	public static function get_StatusFont(){}
	/**
	 * @param \System\String|string $systemFontName
	 * @return \System\Drawing\Font
	 */
	public static function GetFontByName($systemFontName){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
