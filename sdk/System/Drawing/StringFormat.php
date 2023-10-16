<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StringFormatMethodsOverride
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
class StringFormat extends \System\MarshalByRefObject implements 
	\System\ICloneable,
	\System\IDisposable
{
	/**
	 * @var \System\Drawing\StringAlignment
	 * @property
	 */
	public $Alignment;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $DigitSubstitutionLanguage;
	/**
	 * @var \System\Drawing\StringDigitSubstitute
	 * @property
	 */
	public readonly $DigitSubstitutionMethod;
	/**
	 * @var \System\Drawing\StringFormatFlags
	 * @property
	 */
	public $FormatFlags;
	/**
	 * @var \System\Drawing\StringFormat
	 * @property
	 */
	public readonly $GenericDefault;
	/**
	 * @var \System\Drawing\StringFormat
	 * @property
	 */
	public readonly $GenericTypographic;
	/**
	 * @var \System\Drawing\Text\HotkeyPrefix
	 * @property
	 */
	public $HotkeyPrefix;
	/**
	 * @var \System\Drawing\StringAlignment
	 * @property
	 */
	public $LineAlignment;
	/**
	 * @var \System\Drawing\StringTrimming
	 * @property
	 */
	public $Trimming;
	/**
	 * @return \System\Drawing\StringAlignment
	 */
	public  function get_Alignment(){}
	/**
	 * @param \System\Drawing\StringAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_Alignment($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_DigitSubstitutionLanguage(){}
	/**
	 * @return \System\Drawing\StringDigitSubstitute
	 */
	public  function get_DigitSubstitutionMethod(){}
	/**
	 * @return \System\Drawing\StringFormatFlags
	 */
	public  function get_FormatFlags(){}
	/**
	 * @param \System\Drawing\StringFormatFlags $value
	 * @return \System\Void|void
	 */
	public  function set_FormatFlags($value){}
	/**
	 * @return \System\Drawing\StringFormat
	 */
	public static function get_GenericDefault(){}
	/**
	 * @return \System\Drawing\StringFormat
	 */
	public static function get_GenericTypographic(){}
	/**
	 * @return \System\Drawing\Text\HotkeyPrefix
	 */
	public  function get_HotkeyPrefix(){}
	/**
	 * @param \System\Drawing\Text\HotkeyPrefix $value
	 * @return \System\Void|void
	 */
	public  function set_HotkeyPrefix($value){}
	/**
	 * @return \System\Drawing\StringAlignment
	 */
	public  function get_LineAlignment(){}
	/**
	 * @param \System\Drawing\StringAlignment $value
	 * @return \System\Void|void
	 */
	public  function set_LineAlignment($value){}
	/**
	 * @return \System\Drawing\StringTrimming
	 */
	public  function get_Trimming(){}
	/**
	 * @param \System\Drawing\StringTrimming $value
	 * @return \System\Void|void
	 */
	public  function set_Trimming($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Single& $firstTabOffset
	 * @return \System\Single[]
	 */
	public  function GetTabStops($firstTabOffset){}
	/**
	 * @param \System\Int32|int $language
	 * @param \System\Drawing\StringDigitSubstitute $substitute
	 * @return \System\Void|void
	 */
	public  function SetDigitSubstitution($language, $substitute){}
	/**
	 * @param \System\Drawing\CharacterRange[] $ranges
	 * @return \System\Void|void
	 */
	public  function SetMeasurableCharacterRanges($ranges){}
	/**
	 * @param \System\Single $firstTabOffset
	 * @param \System\Single[] $tabStops
	 * @return \System\Void|void
	 */
	public  function SetTabStops($firstTabOffset, $tabStops){}
	/**
	 * @uses StringFormatMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses StringFormatMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
