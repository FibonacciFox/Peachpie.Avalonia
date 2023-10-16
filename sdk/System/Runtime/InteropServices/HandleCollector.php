<?php
namespace System\Runtime\InteropServices;
/**
 */
class HandleCollector extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $InitialThreshold;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaximumThreshold;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_InitialThreshold(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaximumThreshold(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Add(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Remove(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
