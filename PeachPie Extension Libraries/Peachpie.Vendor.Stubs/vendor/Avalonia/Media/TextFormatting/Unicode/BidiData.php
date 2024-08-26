<?php
namespace Avalonia\Media\TextFormatting\Unicode;
final class BidiData extends \System\Object
{
	/**
	 * @property
	 * @var \System\SByte
	 */
	public $ParagraphEmbeddingLevel;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $HasBrackets;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $HasEmbeddings;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $HasIsolates;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Length;
	/**
	 * @property
	 * @var \Avalonia\Utilities\ArraySlice_1[Avalonia\Media\TextFormatting\Unicode\BidiClass]
	 */
	public $Classes;
	/**
	 * @property
	 * @var \Avalonia\Utilities\ArraySlice_1[Avalonia\Media\TextFormatting\Unicode\BidiPairedBracketType]
	 */
	public $PairedBracketTypes;
	/**
	 * @property
	 * @var \Avalonia\Utilities\ArraySlice_1[System\Int32]
	 */
	public $PairedBracketValues;
	/**
	 * @param \System\ReadOnlySpan_1 $text [generic: System\Char]
	 * @return \System\Void|void
	 */
	public function Append($text){}
	/**
	 * @return \System\Void|void
	 */
	public function SaveTypes(){}
	/**
	 * @return \System\Void|void
	 */
	public function RestoreTypes(){}
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Utilities\ArraySlice_1[System\SByte]
	 */
	public function GetTempLevelBuffer($length){}
	/**
	 * @return \System\Void|void
	 */
	public function Reset(){}
	/**
	 */
	public function __construct(){}
}