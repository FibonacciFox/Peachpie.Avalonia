<?php
namespace System\Runtime\InteropServices;
/**
 */
class PosixSignalContext extends \System\Object
{
	/**
	 * @var \System\Runtime\InteropServices\PosixSignal
	 * @property
	 */
	public $Signal;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Cancel;
	/**
	 * @return \System\Runtime\InteropServices\PosixSignal
	 */
	public  function get_Signal(){}
	/**
	 * @param \System\Runtime\InteropServices\PosixSignal $value
	 * @return \System\Void|void
	 */
	protected  function set_Signal($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Cancel(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Cancel($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
