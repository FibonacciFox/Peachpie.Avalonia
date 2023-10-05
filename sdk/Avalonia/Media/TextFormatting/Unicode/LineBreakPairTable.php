<?php
namespace Avalonia\Media\TextFormatting\Unicode;
/**
 */
class LineBreakPairTable extends \System\Object
{
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $DIBRK;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $INBRK;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $CIBRK;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $CPBRK;
	/**
	 * @var \System\Byte
	 * @field
	 */
	public $PRBRK;
	/**
	 * @var \System\Byte[][]
	 * @property
	 */
	public readonly $Table;
	/**
	 * @return \System\Byte[][]
	 */
	public static function get_Table(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
