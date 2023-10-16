<?php
namespace System\Runtime\Versioning;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FrameworkNameMethodsOverride
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
class FrameworkName extends \System\Object implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Identifier;
	/**
	 * @var \System\Version
	 * @property
	 */
	public readonly $Version;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Profile;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $FullName;
	/**
	 * @return \System\String|string
	 */
	public  function get_Identifier(){}
	/**
	 * @return \System\Version
	 */
	public  function get_Version(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Profile(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_FullName(){}
	/**
	 * @uses FrameworkNameMethodsOverride::Equals_1 ($obj)
	 * @uses FrameworkNameMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Runtime\Versioning\FrameworkName $left
	 * @param \System\Runtime\Versioning\FrameworkName $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Runtime\Versioning\FrameworkName $left
	 * @param \System\Runtime\Versioning\FrameworkName $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
