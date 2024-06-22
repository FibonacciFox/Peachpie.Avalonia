<?php
namespace Avalonia\Media\TextFormatting;
final class FormattingObjectPool extends \System\Object
{

	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\FormattingObjectPool
	 * @since readonly
	 */
	public $Instance;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\FormattingObjectPool+ListPool_1[Avalonia\Media\TextFormatting\TextRun]
	 * @since readonly
	 */
	public $TextRunLists;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\FormattingObjectPool+ListPool_1[Avalonia\Media\TextFormatting\UnshapedTextRun]
	 * @since readonly
	 */
	public $UnshapedTextRunLists;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\FormattingObjectPool+ListPool_1[Avalonia\Media\TextFormatting\TextLine]
	 * @since readonly
	 */
	public $TextLines;
	/**
	 * @return \System\Void|void
	 */
	public function VerifyAllReturned(){}
	/**
	 */
	public function __construct(){}
}