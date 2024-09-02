<?php
namespace System\Runtime\InteropServices\ComTypes;
final class STATDATA extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\FORMATETC
	 */
	public $formatetc;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\ADVF
	 */
	public $advf;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\IAdviseSink
	 */
	public $advSink;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $connection;

}