<?php
namespace System;
final class Currency extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	protected $m_value;
	/**
	 * @param \System\Decimal $value
	 */
	public function __construct($value){}
}