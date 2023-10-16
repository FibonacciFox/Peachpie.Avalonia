<?php
namespace System\Drawing;
/**
 */
class CharacterRange extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $First;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Length;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_First(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_First($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Length($value){}
	/**
	 * @param \System\Drawing\CharacterRange $cr1
	 * @param \System\Drawing\CharacterRange $cr2
	 * @return \System\Boolean
	 */
	public static function op_Equality($cr1, $cr2){}
	/**
	 * @param \System\Drawing\CharacterRange $cr1
	 * @param \System\Drawing\CharacterRange $cr2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($cr1, $cr2){}
}
