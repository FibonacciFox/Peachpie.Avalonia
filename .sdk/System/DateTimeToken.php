<?php
namespace System;
final class DateTimeToken extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\DateTimeParse+DTT
	 */
	protected $dtt;
	/**
	 * @field
	 * @var \System\TokenType
	 */
	protected $suffix;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $num;

}