<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontFamilyMethodsOverride
{
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class FontFamily extends \System\MarshalByRefObject implements 
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\FontFamily[]
	 * @property
	 */
	public readonly $Families;
	/**
	 * @var \System\Drawing\FontFamily
	 * @property
	 */
	public readonly $GenericMonospace;
	/**
	 * @var \System\Drawing\FontFamily
	 * @property
	 */
	public readonly $GenericSansSerif;
	/**
	 * @var \System\Drawing\FontFamily
	 * @property
	 */
	public readonly $GenericSerif;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @return \System\Drawing\FontFamily[]
	 */
	public static function get_Families(){}
	/**
	 * @return \System\Drawing\FontFamily
	 */
	public static function get_GenericMonospace(){}
	/**
	 * @return \System\Drawing\FontFamily
	 */
	public static function get_GenericSansSerif(){}
	/**
	 * @return \System\Drawing\FontFamily
	 */
	public static function get_GenericSerif(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Drawing\FontStyle $style
	 * @return \System\Int32|int
	 */
	public  function GetCellAscent($style){}
	/**
	 * @param \System\Drawing\FontStyle $style
	 * @return \System\Int32|int
	 */
	public  function GetCellDescent($style){}
	/**
	 * @param \System\Drawing\FontStyle $style
	 * @return \System\Int32|int
	 */
	public  function GetEmHeight($style){}
	/**
	 * @param \System\Drawing\Graphics $graphics
	 * @return \System\Drawing\FontFamily[]
	 */
	public static function GetFamilies($graphics){}
	/**
	 * @param \System\Drawing\FontStyle $style
	 * @return \System\Int32|int
	 */
	public  function GetLineSpacing($style){}
	/**
	 * @param \System\Int32|int $language
	 * @return \System\String|string
	 */
	public  function GetName($language){}
	/**
	 * @param \System\Drawing\FontStyle $style
	 * @return \System\Boolean
	 */
	public  function IsStyleAvailable($style){}
	/**
	 * @uses FontFamilyMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses FontFamilyMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
