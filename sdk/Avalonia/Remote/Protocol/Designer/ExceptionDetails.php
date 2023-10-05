<?php
namespace Avalonia\Remote\Protocol\Designer;
/**
 */
class ExceptionDetails extends \System\Object
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $ExceptionType;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Message;
	/**
	 * @var \System\Nullable_1[System\Int32]
	 * @property
	 */
	public $LineNumber;
	/**
	 * @var \System\Nullable_1[System\Int32]
	 * @property
	 */
	public $LinePosition;
	/**
	 * @return \System\String|string
	 */
	public  function get_ExceptionType(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_ExceptionType($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Message(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Message($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_LineNumber(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_LineNumber($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_LinePosition(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_LinePosition($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
