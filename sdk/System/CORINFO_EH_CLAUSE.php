<?php
namespace System;
/**
 */
class CORINFO_EH_CLAUSE extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $Flags;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $TryOffset;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $TryLength;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $HandlerOffset;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $HandlerLength;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $ClassTokenOrFilterOffset;
}
