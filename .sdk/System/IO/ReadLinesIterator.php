<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReadLinesIteratorOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @return \System\IO\ReadLinesIterator
	 */
	#[MethodOverride]protected static function CreateIterator_1 ($path, $encoding){}
	/**
	 * @deprecated
	 * @param \System\String|string $path
	 * @param \System\Text\Encoding $encoding
	 * @param \System\IO\StreamReader $reader
	 * @return \System\IO\ReadLinesIterator
	 */
	#[MethodOverride]private static function CreateIterator_2 ($path, $encoding, $reader){}
}
final class ReadLinesIterator extends \System\IO\Iterator_1 implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator
{
	use ReadLinesIteratorOverride;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $state;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $current;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Current;
	/**
	 * @uses ReadLinesIteratorOverride::CreateIterator_1 <br>protected , args: ($path, $encoding)<br>
	 * @uses ReadLinesIteratorOverride::CreateIterator_2 <br>private , args: ($path, $encoding, $reader)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IO\ReadLinesIterator|mixed|\override
	 */
	#[MethodOverrideProtected]function CreateIterator (\override ...$args){}
	private function Reset(){}
}