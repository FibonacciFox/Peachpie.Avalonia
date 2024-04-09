<?php
namespace System\IO;
final class ReadWriteParameters extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Byte[]
	 */
	protected $Buffer;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $Offset;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $Count;

}