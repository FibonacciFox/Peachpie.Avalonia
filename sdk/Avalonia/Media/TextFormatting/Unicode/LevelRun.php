<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class LevelRun extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Start;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Level;
	/**
	 * @var \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 * @property
	 */
	public readonly $Sos;
	/**
	 * @var \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 * @property
	 */
	public readonly $Eos;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Start(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Level(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 */
	public  function get_Sos(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\Unicode\BidiClass
	 */
	public  function get_Eos(){}
}
