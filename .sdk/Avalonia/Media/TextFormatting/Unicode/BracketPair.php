<?php
namespace Avalonia\Media\TextFormatting\Unicode;
final class BracketPair extends \System\ValueType implements
	\System\IComparable_1
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $OpeningIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ClosingIndex;
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\BidiAlgorithm+BracketPair $other
	 * @return \System\Int32|int
	 */
	public function CompareTo($other){}
	/**
	 * @param \System\Int32|int $openingIndex
	 * @param \System\Int32|int $closingIndex
	 */
	public function __construct($openingIndex, $closingIndex){}
}