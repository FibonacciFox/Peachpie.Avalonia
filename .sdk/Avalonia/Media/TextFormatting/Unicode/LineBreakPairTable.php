<?php
namespace Avalonia\Media\TextFormatting\Unicode;
class LineBreakPairTable extends \System\Object
{

	/**
	 * @field
	 * @var \System\Byte
	 */
	const DIBRK = '0';
	/**
	 * @field
	 * @var \System\Byte
	 */
	const INBRK = '1';
	/**
	 * @field
	 * @var \System\Byte
	 */
	const CIBRK = '2';
	/**
	 * @field
	 * @var \System\Byte
	 */
	const CPBRK = '3';
	/**
	 * @field
	 * @var \System\Byte
	 */
	const PRBRK = '4';
	/**
	 * @property
	 * @var \System\Byte[][]
	 * @since readonly
	 */
	public $Table;

}