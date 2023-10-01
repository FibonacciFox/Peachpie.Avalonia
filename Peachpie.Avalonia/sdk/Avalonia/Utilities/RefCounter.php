<?php
namespace Avalonia\Utilities;
/**
 */
class RefCounter extends \System\Object
{
	/**
	 * @return \System\Void|void
	 */
	public  function AddRef(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Release(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_RefCount(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
