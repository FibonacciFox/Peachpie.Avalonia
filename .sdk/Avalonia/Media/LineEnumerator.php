<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LineEnumeratorOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Media\TextFormatting\TextLine
	 */
	#[MethodOverride]public function get_Current_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_Current_2 (){}
}
final class LineEnumerator extends \System\ValueType implements
	\System\Collections\IEnumerator,
	\System\IDisposable
{
	use LineEnumeratorOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Position;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Length;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextLine
	 */
	public $Current;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @uses LineEnumeratorOverride::get_Current_1 <br>public , args: ()<br>
	 * @uses LineEnumeratorOverride::get_Current_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\TextFormatting\TextLine|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_Current (){}
	private function MaxLineLength($line){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	private function FormatLine($textSource, $textSourcePosition, $maxLineLength, $paraProps, $lineBreak){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
}