<?php
namespace Avalonia\Win32;
/**
 */
class ClipboardFormat extends \System\Object
{
	/**
	 * @var \System\UInt16
	 * @property
	 */
	public readonly $Format;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\UInt16[]
	 * @property
	 */
	public readonly $Synthesized;
	/**
	 * @return \System\UInt16
	 */
	public  function get_Format(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\UInt16[]
	 */
	public  function get_Synthesized(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
