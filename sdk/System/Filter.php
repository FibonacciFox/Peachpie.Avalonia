<?php
namespace System;
/**
 */
class Filter extends \System\ValueType
{
	/**
	 * @param \System\MdUtf8String $name
	 * @return \System\Boolean
	 */
	public  function Match($name){}
	/**
	 * @return \System\Boolean
	 */
	public  function RequiresStringComparison(){}
	/**
	 * @return \System\Boolean
	 */
	public  function CaseSensitive(){}
	/**
	 * @return \System\UInt32
	 */
	public  function GetHashToMatch(){}
}
