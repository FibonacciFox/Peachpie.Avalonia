<?php
namespace Avalonia\Platform;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuntimePlatformInfoMethodsOverride
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
class RuntimePlatformInfo extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Platform\FormFactorType
	 * @property
	 */
	public readonly $FormFactor;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsDesktop;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsMobile;
	/**
	 * @return \Avalonia\Platform\FormFactorType
	 */
	public  function get_FormFactor(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDesktop(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsDesktop($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMobile(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsMobile($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Platform\RuntimePlatformInfo $left
	 * @param \Avalonia\Platform\RuntimePlatformInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Platform\RuntimePlatformInfo $left
	 * @param \Avalonia\Platform\RuntimePlatformInfo $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses RuntimePlatformInfoMethodsOverride::Equals_1 ($obj)
	 * @uses RuntimePlatformInfoMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
