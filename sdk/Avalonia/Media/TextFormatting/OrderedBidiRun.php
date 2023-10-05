<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class OrderedBidiRun extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $RunIndex;
	/**
	 * @var \System\SByte
	 * @property
	 */
	public readonly $Level;
	/**
	 * @var \Avalonia\Media\TextFormatting\TextRun
	 * @property
	 */
	public readonly $Run;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $NextRunIndex;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RunIndex(){}
	/**
	 * @return \System\SByte
	 */
	public  function get_Level(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public  function get_Run(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_NextRunIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_NextRunIndex($value){}
}
