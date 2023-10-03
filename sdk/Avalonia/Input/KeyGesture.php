<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait KeyGestureMethodsOverride
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
class KeyGesture extends \System\Object implements 
	\System\IEquatable_1
{
	/**
	 * @uses KeyGestureMethodsOverride::Equals_1 ($other)
	 * @uses KeyGestureMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Input\KeyGesture $left
	 * @param \Avalonia\Input\KeyGesture $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Input\KeyGesture $left
	 * @param \Avalonia\Input\KeyGesture $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @return \Avalonia\Input\Key
	 */
	public  function get_Key(){}
	/**
	 * @return \Avalonia\Input\KeyModifiers
	 */
	public  function get_KeyModifiers(){}
	/**
	 * @param \System\String|string $gesture
	 * @return \Avalonia\Input\KeyGesture
	 */
	public static function Parse($gesture){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $keyEvent
	 * @return \System\Boolean
	 */
	public  function Matches($keyEvent){}
	/**
	 * @param \System\String|string $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseKey($key){}
	/**
	 * @param \System\ReadOnlySpan_1 $modifier
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ParseModifier($modifier){}
	/**
	 * @param \Avalonia\Input\Key $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ResolveNumPadOperationKey($key){}
}
