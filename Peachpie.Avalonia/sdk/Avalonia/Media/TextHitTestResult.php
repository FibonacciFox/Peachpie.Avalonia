<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextHitTestResultMethodsOverride
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
class TextHitTestResult extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Media\CharacterHit
	 */
	public  function get_CharacterHit(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsInside(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_TextPosition(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsTrailing(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextHitTestResult $left
	 * @param \Avalonia\Media\TextHitTestResult $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextHitTestResult $left
	 * @param \Avalonia\Media\TextHitTestResult $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses TextHitTestResultMethodsOverride::Equals_1 ($obj)
	 * @uses TextHitTestResultMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
