<?php
namespace System\Drawing\Printing;
/**
 */
class Margins extends \System\Object implements 
	\System\ICloneable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Bottom;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Left;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Right;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Top;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Bottom(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Bottom($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Left(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Left($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Right(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Right($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Top(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Top($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @param \System\Drawing\Printing\Margins $m1
	 * @param \System\Drawing\Printing\Margins $m2
	 * @return \System\Boolean
	 */
	public static function op_Equality($m1, $m2){}
	/**
	 * @param \System\Drawing\Printing\Margins $m1
	 * @param \System\Drawing\Printing\Margins $m2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($m1, $m2){}
}
