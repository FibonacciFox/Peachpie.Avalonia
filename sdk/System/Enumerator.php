<?php
namespace System;
/**
 */
class Enumerator extends \System\ValueType
{
	/**
	 * @var \T&
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @return \System\T&
	 */
	public  function get_Current(){}
}
