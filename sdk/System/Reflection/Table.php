<?php
namespace System\Reflection;
/**
 */
class Table extends \System\Object
{
	/**
	 * @var \K[]
	 * @field
	 */
	protected $m_keys;
	/**
	 * @var \V[]
	 * @field
	 */
	protected $m_values;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $m_count;
	/**
	 * @param \System\Reflection\K $key
	 * @param \System\Reflection\V $value
	 * @return \System\Void|void
	 */
	protected  function Insert($key, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
