<?php
namespace Avalonia\Media;
final class TextHitTestResult extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \Avalonia\Media\CharacterHit
	 * @since readonly
	 */
	public $CharacterHit;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInside;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $TextPosition;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsTrailing;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\TextHitTestResult $left
	 * @param \Avalonia\Media\TextHitTestResult $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\TextHitTestResult $left
	 * @param \Avalonia\Media\TextHitTestResult $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @param \System\Int32|int $textPosition
	 * @param \System\Boolean|bool $isInside
	 * @param \System\Boolean|bool $isTrailing
	 */
	public function __construct($characterHit, $textPosition, $isInside, $isTrailing){}
}