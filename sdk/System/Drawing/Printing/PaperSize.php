<?php
namespace System\Drawing\Printing;
/**
 */
class PaperSize extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Height;
	/**
	 * @var \System\Drawing\Printing\PaperKind
	 * @property
	 */
	public readonly $Kind;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PaperName;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $RawKind;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Width;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Height(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Height($value){}
	/**
	 * @return \System\Drawing\Printing\PaperKind
	 */
	public  function get_Kind(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PaperName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PaperName($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RawKind(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_RawKind($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Width(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Width($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
