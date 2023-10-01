<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CharacterHitMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class CharacterHit extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_FirstCharacterIndex(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TrailingLength(){}
	/**
	 * @uses CharacterHitMethodsOverride::Equals_1 ($other)
	 * @uses CharacterHitMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\CharacterHit $left
	 * @param \Avalonia\Media\CharacterHit $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\CharacterHit $left
	 * @param \Avalonia\Media\CharacterHit $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
