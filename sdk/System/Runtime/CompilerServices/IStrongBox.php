<?php
namespace System\Runtime\CompilerServices;
/**
 */
interface IStrongBox
{
	/**
	 */
	public function get_Value();
	/**
	 * @param \System\Object|object $value
	 */
	public function set_Value($value);
}
