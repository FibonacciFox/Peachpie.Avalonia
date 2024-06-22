<?php
namespace Avalonia\Media\TextFormatting;
class IndexedTextRun extends \System\Object
{

	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $TextSourceCharacterIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $RunIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $NextRunIndex;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRun
	 */
	public $TextRun;
	/**
	 */
	public function __construct(){}
}