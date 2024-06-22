<?php
namespace Avalonia\Media\TextFormatting;
final class TextRunEnumerator extends \System\ValueType
{

	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRun
	 */
	public $Current;
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\ITextSource $textSource
	 * @param \System\Int32|int $firstTextSourceIndex
	 */
	public function __construct($textSource, $firstTextSourceIndex){}
}