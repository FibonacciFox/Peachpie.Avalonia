<?php
namespace System;
/**
 */
class EnumInfo extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public readonly $HasFlagsAttribute;
	/**
	 * @var \System\UInt64[]
	 * @field
	 */
	public readonly $Values;
	/**
	 * @var \System\String[]
	 * @field
	 */
	public readonly $Names;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
