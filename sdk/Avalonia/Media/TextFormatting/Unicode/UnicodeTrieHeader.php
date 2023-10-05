<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class UnicodeTrieHeader extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $HighStart;
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $ErrorValue;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $DataLength;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_HighStart(){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_ErrorValue(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_DataLength(){}
	/**
	 * @param \System\ReadOnlySpan_1 $data
	 * @return \Avalonia\Media\TextFormatting\Unicode\UnicodeTrieHeader
	 */
	public static function Parse($data){}
}
