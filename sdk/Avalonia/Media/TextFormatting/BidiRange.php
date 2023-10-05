<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class BidiRange extends \System\ValueType
{
	/**
	 * @var \System\SByte
	 * @property
	 */
	public $Level;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $LeftRunIndex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $RightRunIndex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $PreviousRangeIndex;
	/**
	 * @return \System\SByte
	 */
	public  function get_Level(){}
	/**
	 * @param \System\SByte $value
	 * @return \System\Void|void
	 */
	public  function set_Level($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LeftRunIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_LeftRunIndex($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RightRunIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_RightRunIndex($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_PreviousRangeIndex(){}
}
