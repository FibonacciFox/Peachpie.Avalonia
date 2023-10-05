<?php
namespace Avalonia\FreeDesktop;
/**
 */
class X11InputMethodForwardedKey extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $KeyVal;
	/**
	 * @var \Avalonia\Input\KeyModifiers
	 * @property
	 */
	public $Modifiers;
	/**
	 * @var \Avalonia\Input\Raw\RawKeyEventType
	 * @property
	 */
	public $Type;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_KeyVal(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_KeyVal($value){}
	/**
	 * @return \Avalonia\Input\KeyModifiers
	 */
	public  function get_Modifiers(){}
	/**
	 * @param \Avalonia\Input\KeyModifiers $value
	 * @return \System\Void|void
	 */
	public  function set_Modifiers($value){}
	/**
	 * @return \Avalonia\Input\Raw\RawKeyEventType
	 */
	public  function get_Type(){}
	/**
	 * @param \Avalonia\Input\Raw\RawKeyEventType $value
	 * @return \System\Void|void
	 */
	public  function set_Type($value){}
}
