<?php
namespace System\Diagnostics\Tracing;
final class ChannelInfo extends \System\Object
{
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @field
	 * @var \System\UInt64
	 */
	public $Keywords;
	/**
	 * @field
	 * @var \System\Diagnostics\Tracing\EventChannelAttribute
	 */
	public $Attribs;
	/**
	 */
	public function __construct(){}
}