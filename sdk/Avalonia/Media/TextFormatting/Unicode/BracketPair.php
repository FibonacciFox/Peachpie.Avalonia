<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class BracketPair extends \System\ValueType implements 
	\System\IComparable_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $OpeningIndex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ClosingIndex;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_OpeningIndex(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ClosingIndex(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\BracketPair $other
	 * @return \System\Int32|int
	 */
	public  function CompareTo($other){}
}
