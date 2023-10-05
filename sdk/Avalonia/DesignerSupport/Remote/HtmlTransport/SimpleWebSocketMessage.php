<?php
namespace Avalonia\DesignerSupport\Remote\HtmlTransport;
/**
 */
class SimpleWebSocketMessage extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsText;
	/**
	 * @var \System\Byte[]
	 * @property
	 */
	public $Data;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsText(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsText($value){}
	/**
	 * @return \System\Byte[]
	 */
	public  function get_Data(){}
	/**
	 * @param \System\Byte[] $value
	 * @return \System\Void|void
	 */
	public  function set_Data($value){}
	/**
	 * @return \System\String|string
	 */
	public  function AsString(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
