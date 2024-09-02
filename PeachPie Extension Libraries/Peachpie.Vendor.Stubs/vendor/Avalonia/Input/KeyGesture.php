<?php
namespace Avalonia\Input;
final class KeyGesture extends \System\Object implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \Avalonia\Input\Key
	 * @since readonly
	 */
	public $Key;
	/**
	 * @property
	 * @var \Avalonia\Input\KeyModifiers
	 * @since readonly
	 */
	public $KeyModifiers;
	/**
	 * @param \Avalonia\Input\KeyGesture $left
	 * @param \Avalonia\Input\KeyGesture $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Input\KeyGesture $left
	 * @param \Avalonia\Input\KeyGesture $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\String|string $gesture
	 * @return \Avalonia\Input\KeyGesture
	 */
	public static function Parse($gesture){}
	/**
	 * @param \Avalonia\Input\KeyEventArgs $keyEvent
	 * @return \System\Boolean|bool
	 */
	public function Matches($keyEvent){}
	private static function ParseKey($key){}
	private static function ParseModifier($modifier){}
	private static function ResolveNumPadOperationKey($key){}
	/**
	 * @param \Avalonia\Input\Key $key
	 * @param \Avalonia\Input\KeyModifiers $modifiers
	 */
	public function __construct($key, $modifiers){}
}