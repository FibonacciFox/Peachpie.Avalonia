<?php
namespace Avalonia\Media\TextFormatting\Unicode;
final class UnicodeTrieHeader extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $HighStart;
	/**
	 * @property
	 * @var \System\UInt32
	 * @since readonly
	 */
	public $ErrorValue;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $DataLength;
	/**
	 * @param \System\ReadOnlySpan_1 $data [generic: System\Byte]
	 * @return \Avalonia\Media\TextFormatting\Unicode\UnicodeTrie+UnicodeTrieHeader
	 */
	public static function Parse($data){}
}