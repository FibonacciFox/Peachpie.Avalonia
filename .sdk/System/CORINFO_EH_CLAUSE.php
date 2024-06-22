<?php
namespace System;
final class CORINFO_EH_CLAUSE extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $Flags;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $TryOffset;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $TryLength;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $HandlerOffset;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $HandlerLength;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $ClassTokenOrFilterOffset;

}