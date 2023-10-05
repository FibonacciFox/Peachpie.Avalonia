<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UnicodeTrieBuilderMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function EqualSequence_1($a, $s, $t, $length){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function EqualSequence_2($a, $s, $t, $length){}
}
/**
 */
class UnicodeTrieBuilder extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $SHIFT_1;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $SHIFT_2;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $OMITTED_BMP_INDEX_1_LENGTH;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $INDEX_2_MASK;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $DATA_MASK;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $INDEX_SHIFT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $DATA_GRANULARITY;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $LSCP_INDEX_2_OFFSET;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $INDEX_1_OFFSET;
	/**
	 * @param \System\Int32|int $codePoint
	 * @param \System\UInt32 $value
	 * @return \Avalonia\Media\TextFormatting\Unicode\UnicodeTrieBuilder
	 */
	public  function Set($codePoint, $value){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\UInt32 $value
	 * @param \System\Boolean $overwrite
	 * @return \Avalonia\Media\TextFormatting\Unicode\UnicodeTrieBuilder
	 */
	public  function SetRange($start, $end, $value, $overwrite){}
	/**
	 * @param \System\Int32|int $c
	 * @param \System\Boolean $fromLSCP
	 * @return \System\UInt32
	 */
	public  function Get($c, $fromLSCP){}
	/**
	 * @return \System\Byte[]
	 */
	public  function ToBuffer(){}
	/**
	 * @param \System\IO\Stream $stream
	 * @return \System\Void|void
	 */
	public  function Save($stream){}
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\UnicodeTrie
	 */
	public  function Freeze(){}
	/**
	 * @param \System\Int32|int $c
	 * @param \System\Boolean $forLSCP
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsInNullBlock($c, $forLSCP){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AllocIndex2Block(){}
	/**
	 * @param \System\Int32|int $c
	 * @param \System\Boolean $forLSCP
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetIndex2Block($c, $forLSCP){}
	/**
	 * @param \System\Int32|int $block
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsWritableBlock($block){}
	/**
	 * @param \System\Int32|int $copyBlock
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AllocDataBlock($copyBlock){}
	/**
	 * @param \System\Int32|int $block
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReleaseDataBlock($block){}
	/**
	 * @param \System\Int32|int $i2
	 * @param \System\Int32|int $block
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetIndex2Entry($i2, $block){}
	/**
	 * @param \System\Int32|int $c
	 * @param \System\Boolean $forLSCP
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDataBlock($c, $forLSCP){}
	/**
	 * @param \System\Int32|int $block
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $limit
	 * @param \System\UInt32 $value
	 * @param \System\UInt32 $initialValue
	 * @param \System\Boolean $overwrite
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FillBlock($block, $start, $limit, $value, $initialValue, $overwrite){}
	/**
	 * @param \System\Int32|int $block
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteBlock($block, $value){}
	/**
	 * @param \System\UInt32 $highValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindHighStart($highValue){}
	/**
	 * @param \System\Int32|int $dataLength
	 * @param \System\Int32|int $otherBlock
	 * @param \System\Int32|int $blockLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindSameDataBlock($dataLength, $otherBlock, $blockLength){}
	/**
	 * @param \System\Int32|int $index2Length
	 * @param \System\Int32|int $otherBlock
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindSameIndex2Block($index2Length, $otherBlock){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompactData(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompactIndex2(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Compact(){}
	/**
	 * @uses UnicodeTrieBuilderMethodsOverride::EqualSequence_1 ($a, $s, $t, $length)
	 * @uses UnicodeTrieBuilderMethodsOverride::EqualSequence_2 ($a, $s, $t, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function EqualSequence(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
