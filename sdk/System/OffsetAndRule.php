<?php
namespace System;
/**
 */
class OffsetAndRule extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $Year;
	/**
	 * @var \System\TimeSpan
	 * @field
	 */
	public readonly $Offset;
	/**
	 * @var \System\TimeZoneInfo+AdjustmentRule
	 * @field
	 */
	public readonly $Rule;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
