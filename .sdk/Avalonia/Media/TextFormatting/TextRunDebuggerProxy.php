<?php
namespace Avalonia\Media\TextFormatting;
class TextRunDebuggerProxy extends \System\Object
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Text;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 * @since readonly
	 */
	public $Properties;
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRun $textRun
	 */
	public function __construct($textRun){}
}