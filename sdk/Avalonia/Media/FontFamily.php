<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontFamilyMethodsOverride
{
	/**
	 * @return \Avalonia\Media\FontFamily
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \Avalonia\Media\FontFamily
	 */
	#[MethodOverride] public static function Parse_2($s, $baseUri){}
}
/**
 */
class FontFamily extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $DefaultFontFamilyName;
	/**
	 * @var \Avalonia\Media\FontFamily
	 * @property
	 */
	public readonly $Default;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \Avalonia\Media\Fonts\FamilyNameCollection
	 * @property
	 */
	public readonly $FamilyNames;
	/**
	 * @var \Avalonia\Media\Fonts\FontFamilyKey
	 * @property
	 */
	public readonly $Key;
	/**
	 * @return \Avalonia\Media\FontFamily
	 */
	public static function get_Default(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \Avalonia\Media\Fonts\FamilyNameCollection
	 */
	public  function get_FamilyNames(){}
	/**
	 * @return \Avalonia\Media\Fonts\FontFamilyKey
	 */
	public  function get_Key(){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\FontFamily
	 */
	public static function op_Implicit($s){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFontFamilyIdentifier($name){}
	/**
	 * @uses FontFamilyMethodsOverride::Parse_1 ($s)
	 * @uses FontFamilyMethodsOverride::Parse_2 ($s, $baseUri)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\FontFamily $a
	 * @param \Avalonia\Media\FontFamily $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \Avalonia\Media\FontFamily $a
	 * @param \Avalonia\Media\FontFamily $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
