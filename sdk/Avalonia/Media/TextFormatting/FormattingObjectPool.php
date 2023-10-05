<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class FormattingObjectPool extends \System\Object
{
	/**
	 * @var \Avalonia\Media\TextFormatting\FormattingObjectPool
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @var \Avalonia\Media\TextFormatting\FormattingObjectPool+ListPool_1[Avalonia\Media\TextFormatting\TextRun]
	 * @property
	 */
	public readonly $TextRunLists;
	/**
	 * @var \Avalonia\Media\TextFormatting\FormattingObjectPool+ListPool_1[Avalonia\Media\TextFormatting\UnshapedTextRun]
	 * @property
	 */
	public readonly $UnshapedTextRunLists;
	/**
	 * @var \Avalonia\Media\TextFormatting\FormattingObjectPool+ListPool_1[Avalonia\Media\TextFormatting\TextLine]
	 * @property
	 */
	public readonly $TextLines;
	/**
	 * @return \Avalonia\Media\TextFormatting\FormattingObjectPool
	 */
	public static function get_Instance(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\ListPool_1
	 */
	public  function get_TextRunLists(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\ListPool_1
	 */
	public  function get_UnshapedTextRunLists(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\ListPool_1
	 */
	public  function get_TextLines(){}
	/**
	 * @return \System\Void|void
	 */
	public  function VerifyAllReturned(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
