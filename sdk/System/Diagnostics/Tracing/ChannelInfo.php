<?php
namespace System\Diagnostics\Tracing;
/**
 */
class ChannelInfo extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	public $Name;
	/**
	 * @var \System\UInt64
	 * @field
	 */
	public $Keywords;
	/**
	 * @var \System\Diagnostics\Tracing\EventChannelAttribute
	 * @field
	 */
	public $Attribs;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
