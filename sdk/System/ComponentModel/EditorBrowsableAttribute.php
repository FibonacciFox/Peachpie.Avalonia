<?php
namespace System\ComponentModel;
/**
 */
class EditorBrowsableAttribute extends \System\Attribute
{
	/**
	 * @var \System\ComponentModel\EditorBrowsableState
	 * @property
	 */
	public readonly $State;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\ComponentModel\EditorBrowsableState
	 */
	public  function get_State(){}
}
