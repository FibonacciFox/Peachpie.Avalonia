<?php
namespace System\Diagnostics;
/**
 */
class DebuggerBrowsableAttribute extends \System\Attribute
{
	/**
	 * @var \System\Diagnostics\DebuggerBrowsableState
	 * @property
	 */
	public readonly $State;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Diagnostics\DebuggerBrowsableState
	 */
	public  function get_State(){}
}
