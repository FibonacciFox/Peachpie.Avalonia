<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AcrylicPlatformCompensationLevelsMethodsOverride
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
class AcrylicPlatformCompensationLevels extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $TransparentLevel;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $BlurLevel;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $AcrylicBlurLevel;
	/**
	 * @return \System\Double|double
	 */
	public  function get_TransparentLevel(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_BlurLevel(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_AcrylicBlurLevel(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Controls\AcrylicPlatformCompensationLevels $left
	 * @param \Avalonia\Controls\AcrylicPlatformCompensationLevels $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Controls\AcrylicPlatformCompensationLevels $left
	 * @param \Avalonia\Controls\AcrylicPlatformCompensationLevels $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses AcrylicPlatformCompensationLevelsMethodsOverride::Equals_1 ($obj)
	 * @uses AcrylicPlatformCompensationLevelsMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
