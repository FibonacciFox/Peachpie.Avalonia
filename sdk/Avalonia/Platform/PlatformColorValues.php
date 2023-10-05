<?php
namespace Avalonia\Platform;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PlatformColorValuesMethodsOverride
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
class PlatformColorValues extends \System\Object implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Platform\PlatformThemeVariant
	 * @property
	 */
	public $ThemeVariant;
	/**
	 * @var \Avalonia\Platform\ColorContrastPreference
	 * @property
	 */
	public $ContrastPreference;
	/**
	 * @var \Avalonia\Media\Color
	 * @property
	 */
	public $AccentColor1;
	/**
	 * @var \Avalonia\Media\Color
	 * @property
	 */
	public $AccentColor2;
	/**
	 * @var \Avalonia\Media\Color
	 * @property
	 */
	public $AccentColor3;
	/**
	 * @return \System\Type
	 */
	protected  function get_EqualityContract(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_DefaultAccent(){}
	/**
	 * @return \Avalonia\Platform\PlatformThemeVariant
	 */
	public  function get_ThemeVariant(){}
	/**
	 * @param \Avalonia\Platform\PlatformThemeVariant $value
	 * @return \System\Void|void
	 */
	public  function set_ThemeVariant($value){}
	/**
	 * @return \Avalonia\Platform\ColorContrastPreference
	 */
	public  function get_ContrastPreference(){}
	/**
	 * @param \Avalonia\Platform\ColorContrastPreference $value
	 * @return \System\Void|void
	 */
	public  function set_ContrastPreference($value){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_AccentColor1(){}
	/**
	 * @param \Avalonia\Media\Color $value
	 * @return \System\Void|void
	 */
	public  function set_AccentColor1($value){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_AccentColor2(){}
	/**
	 * @param \Avalonia\Media\Color $value
	 * @return \System\Void|void
	 */
	public  function set_AccentColor2($value){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_AccentColor3(){}
	/**
	 * @param \Avalonia\Media\Color $value
	 * @return \System\Void|void
	 */
	public  function set_AccentColor3($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @return \System\Boolean
	 */
	protected  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Platform\PlatformColorValues $left
	 * @param \Avalonia\Platform\PlatformColorValues $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Platform\PlatformColorValues $left
	 * @param \Avalonia\Platform\PlatformColorValues $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses PlatformColorValuesMethodsOverride::Equals_1 ($obj)
	 * @uses PlatformColorValuesMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
