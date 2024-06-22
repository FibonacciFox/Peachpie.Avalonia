<?php
namespace Avalonia\Media\TextFormatting\Unicode;
final class Grapheme extends \System\ValueType
{

	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\Unicode\Codepoint
	 * @since readonly
	 */
	public $FirstCodepoint;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Offset;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @param \Avalonia\Media\TextFormatting\Unicode\Codepoint $firstCodepoint
	 * @param \System\Int32|int $offset
	 * @param \System\Int32|int $length
	 */
	public function __construct($firstCodepoint, $offset, $length){}
}