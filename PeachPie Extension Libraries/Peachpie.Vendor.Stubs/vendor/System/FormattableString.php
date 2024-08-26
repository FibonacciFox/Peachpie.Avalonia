<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FormattableStringOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $ignored
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\String|string
	 */
	#[MethodOverride]private function ToString_1 ($ignored, $formatProvider){}
}
class FormattableString extends \System\Object implements
	\System\IFormattable
{
	use FormattableStringOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Format;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ArgumentCount;
	/**
	 * @return \System\Object[]|array
	 */
	abstract public function GetArguments();
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	abstract public function GetArgument($index);
	/**
	 * @param \System\FormattableString $formattable
	 * @return \System\String|string
	 */
	public static function Invariant($formattable){}
	/**
	 * @param \System\FormattableString $formattable
	 * @return \System\String|string
	 */
	public static function CurrentCulture($formattable){}
}