<?php
namespace System\Collections;
/**
 */
class DictionaryNode extends \System\Object
{
	/**
	 * @var \System\Object
	 * @field
	 */
	public $key;
	/**
	 * @var \System\Object
	 * @field
	 */
	public $value;
	/**
	 * @var \System\Collections\ListDictionaryInternal+DictionaryNode
	 * @field
	 */
	public $next;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
