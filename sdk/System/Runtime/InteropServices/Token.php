<?php
namespace System\Runtime\InteropServices;
/**
 */
class Token extends \System\Object
{
	/**
	 * @var \System\Runtime\InteropServices\PosixSignal
	 * @property
	 */
	public readonly $Signal;
	/**
	 * @var \System\Action_1[System\Runtime\InteropServices\PosixSignalContext]
	 * @property
	 */
	public readonly $Handler;
	/**
	 * @return \System\Runtime\InteropServices\PosixSignal
	 */
	public  function get_Signal(){}
	/**
	 * @return \System\Action_1
	 */
	public  function get_Handler(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
