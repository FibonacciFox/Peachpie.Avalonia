<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontMethodsOverride
{
	/**
	 * @return \System\Drawing\Font
	 */
	#[MethodOverride] public static function FromLogFont_1($lf){}
	/**
	 * @return \System\Drawing\Font
	 */
	#[MethodOverride] public static function FromLogFont_2($lf, $hdc){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public  function GetHeight_1(){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public  function GetHeight_2($graphics){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public  function GetHeight_3($dpi){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ToLogFont_1($logFont){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ToLogFont_2($logFont, $graphics){}
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
class Font extends \System\MarshalByRefObject implements 
	\System\ICloneable,
	\System\IDisposable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Bold;
	/**
	 * @var \System\Drawing\FontFamily
	 * @property
	 */
	public readonly $FontFamily;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $GdiCharSet;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $GdiVerticalFont;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Height;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSystemFont;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Italic;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $OriginalFontName;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $SizeInPoints;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Strikeout;
	/**
	 * @var \System\Drawing\FontStyle
	 * @property
	 */
	public readonly $Style;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $SystemFontName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $Underline;
	/**
	 * @var \System\Drawing\GraphicsUnit
	 * @property
	 */
	public readonly $Unit;
	/**
	 * @return \System\Boolean
	 */
	public  function get_Bold(){}
	/**
	 * @return \System\Drawing\FontFamily
	 */
	public  function get_FontFamily(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_GdiCharSet(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_GdiVerticalFont(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Height(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSystemFont(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Italic(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_OriginalFontName(){}
	/**
	 * @return \System\Single
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Single
	 */
	public  function get_SizeInPoints(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Strikeout(){}
	/**
	 * @return \System\Drawing\FontStyle
	 */
	public  function get_Style(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_SystemFontName(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Underline(){}
	/**
	 * @return \System\Drawing\GraphicsUnit
	 */
	public  function get_Unit(){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\IntPtr $hdc
	 * @return \System\Drawing\Font
	 */
	public static function FromHdc($hdc){}
	/**
	 * @param \System\IntPtr $hfont
	 * @return \System\Drawing\Font
	 */
	public static function FromHfont($hfont){}
	/**
	 * @uses FontMethodsOverride::FromLogFont_1 ($lf)
	 * @uses FontMethodsOverride::FromLogFont_2 ($lf, $hdc)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromLogFont(mixed ...$args){}
	/**
	 * @uses FontMethodsOverride::GetHeight_1 ()
	 * @uses FontMethodsOverride::GetHeight_2 ($graphics)
	 * @uses FontMethodsOverride::GetHeight_3 ($dpi)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHeight(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $si
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetObjectData($si, $context){}
	/**
	 * @return \System\IntPtr
	 */
	public  function ToHfont(){}
	/**
	 * @uses FontMethodsOverride::ToLogFont_1 ($logFont)
	 * @uses FontMethodsOverride::ToLogFont_2 ($logFont, $graphics)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToLogFont(mixed ...$args){}
	/**
	 * @uses FontMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses FontMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
