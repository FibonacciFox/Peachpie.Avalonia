<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UnicodeTrieBuilderOverride {
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IReadOnlyList_1 $a [generic: System\UInt32]
	 * @param \System\Int32|int $s
	 * @param \System\Int32|int $t
	 * @param \System\Int32|int $length
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function EqualSequence_1 ($a, $s, $t, $length){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IReadOnlyList_1 $a [generic: System\Int32]
	 * @param \System\Int32|int $s
	 * @param \System\Int32|int $t
	 * @param \System\Int32|int $length
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function EqualSequence_2 ($a, $s, $t, $length){}
}
class UnicodeTrieBuilder extends \System\Object
{
	use UnicodeTrieBuilderOverride;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const SHIFT_1 = '11';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const SHIFT_2 = '5';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const OMITTED_BMP_INDEX_1_LENGTH = '32';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const INDEX_2_MASK = '63';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const DATA_MASK = '31';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const INDEX_SHIFT = '2';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const DATA_GRANULARITY = '4';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const LSCP_INDEX_2_OFFSET = '2048';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const INDEX_1_OFFSET = '2112';
	/**
	 * @param \System\Int32|int $codePoint
	 * @param \System\UInt32 $value
	 * @return \Avalonia\Media\TextFormatting\Unicode\UnicodeTrieBuilder
	 */
	public function Set($codePoint, $value){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\UInt32 $value
	 * @param \System\Boolean|bool $overwrite
	 * @return \Avalonia\Media\TextFormatting\Unicode\UnicodeTrieBuilder
	 */
	public function SetRange($start, $end, $value, $overwrite){}
	/**
	 * @param \System\Int32|int $c
	 * @param \System\Boolean|bool $fromLSCP
	 * @return \System\UInt32
	 */
	public function Get($c, $fromLSCP){}
	/**
	 * @return \System\Byte[]
	 */
	public function ToBuffer(){}
	/**
	 * @param \System\IO\Stream $stream
	 * @return \System\Void|void
	 */
	public function Save($stream){}
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\UnicodeTrie
	 */
	public function Freeze(){}
	private function IsInNullBlock($c, $forLSCP){}
	private function AllocIndex2Block(){}
	private function GetIndex2Block($c, $forLSCP){}
	private function IsWritableBlock($block){}
	private function AllocDataBlock($copyBlock){}
	private function ReleaseDataBlock($block){}
	private function SetIndex2Entry($i2, $block){}
	private function GetDataBlock($c, $forLSCP){}
	private function FillBlock($block, $start, $limit, $value, $initialValue, $overwrite){}
	private function WriteBlock($block, $value){}
	private function FindHighStart($highValue){}
	private function FindSameDataBlock($dataLength, $otherBlock, $blockLength){}
	private function FindSameIndex2Block($index2Length, $otherBlock){}
	private function CompactData(){}
	private function CompactIndex2(){}
	private function Compact(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses UnicodeTrieBuilderOverride::EqualSequence_1 <br>private , args: ($a, $s, $t, $length)<br>
	 * @uses UnicodeTrieBuilderOverride::EqualSequence_2 <br>private , args: ($a, $s, $t, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePrivate]function EqualSequence (\override ...$args){}
	/**
	 * @param \System\UInt32 $initialValue
	 * @param \System\UInt32 $errorValue
	 */
	public function __construct($initialValue, $errorValue){}
}