<?php
namespace System\Globalization;
final class HebrewNumberParsingContext extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Globalization\HebrewNumber+HS
	 */
	protected $state;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $result;
	/**
	 * @param \System\Int32|int $result
	 */
	public function __construct($result){}
}