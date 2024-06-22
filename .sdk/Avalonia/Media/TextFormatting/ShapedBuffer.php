<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ShapedBufferOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
final class ShapedBuffer extends \System\Object implements
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
	use ShapedBufferOverride;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \Avalonia\Media\IGlyphTypeface
	 * @since readonly
	 */
	public $GlyphTypeface;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $FontRenderingEmSize;
	/**
	 * @property
	 * @var \System\SByte
	 * @since readonly
	 */
	public $BidiLevel;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLeftToRight;
	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 * @since readonly
	 */
	public $Text;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\GlyphInfo
	 */
	public $Item;
	/**
	 * @return \System\Void|void
	 */
	public function Reverse(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @uses ShapedBufferOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ShapedBufferOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function FindGlyphIndex($characterIndex){}
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Media\TextFormatting\SplitResult_1[Avalonia\Media\TextFormatting\ShapedBuffer]
	 */
	protected function Split($length){}
	private function get_Count(){}
	/**
	 * @param \System\ReadOnlyMemory_1 $text [generic: System\Char]
	 * @param \System\Int32|int $bufferLength
	 * @param \Avalonia\Media\IGlyphTypeface $glyphTypeface
	 * @param \System\Double|double $fontRenderingEmSize
	 * @param \System\SByte $bidiLevel
	 */
	public function __construct($text, $bufferLength, $glyphTypeface, $fontRenderingEmSize, $bidiLevel){}
}