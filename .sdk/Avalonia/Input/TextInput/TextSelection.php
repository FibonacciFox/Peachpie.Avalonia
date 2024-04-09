<?php
namespace Avalonia\Input\TextInput;
final class TextSelection extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Start;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $End;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\TextInput\TextSelection $left
	 * @param \Avalonia\Input\TextInput\TextSelection $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\TextInput\TextSelection $left
	 * @param \Avalonia\Input\TextInput\TextSelection $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Int32& &$Start
	 * @param \System\Int32& &$End
	 * @return \System\Void|void
	 */
	public function Deconstruct(&$Start, &$End){}
	/**
	 * @param \System\Int32|int $Start
	 * @param \System\Int32|int $End
	 */
	public function __construct($Start, $End){}
}