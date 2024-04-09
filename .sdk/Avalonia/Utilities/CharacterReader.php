<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CharacterReaderOverride {
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TakeIf_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $condition [generic: System\Char,System\Boolean]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TakeIf_2 ($condition){}
}
final class CharacterReader extends \System\ValueType
{
	use CharacterReaderOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $End;
	/**
	 * @property
	 * @var \System\Char
	 * @since readonly
	 */
	public $Peek;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Position;
	/**
	 * @return \System\Char
	 */
	public function Take(){}
	/**
	 * @return \System\Void|void
	 */
	public function SkipWhitespace(){}
	/**
	 * @uses CharacterReaderOverride::TakeIf_1 <br>public , args: ($c)<br>
	 * @uses CharacterReaderOverride::TakeIf_2 <br>public , args: ($condition)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TakeIf (\override ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\ReadOnlySpan_1[System\Char]
	 */
	public function TakeUntil($c){}
	/**
	 * @param \System\Func_2 $condition [generic: System\Char,System\Boolean]
	 * @return \System\ReadOnlySpan_1[System\Char]
	 */
	public function TakeWhile($condition){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\ReadOnlySpan_1[System\Char]
	 */
	public function TryPeek($count){}
	/**
	 * @return \System\ReadOnlySpan_1[System\Char]
	 */
	public function PeekWhitespace(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function Skip($count){}
	/**
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 */
	public function __construct($s){}
}