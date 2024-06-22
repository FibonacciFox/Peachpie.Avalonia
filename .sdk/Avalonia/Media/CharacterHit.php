<?php
namespace Avalonia\Media;
final class CharacterHit extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $FirstCharacterIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $TrailingLength;
	/**
	 * @param \Avalonia\Media\CharacterHit $left
	 * @param \Avalonia\Media\CharacterHit $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\CharacterHit $left
	 * @param \Avalonia\Media\CharacterHit $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Int32|int $firstCharacterIndex
	 * @param \System\Int32|int $trailingLength
	 */
	public function __construct($firstCharacterIndex, $trailingLength){}
}