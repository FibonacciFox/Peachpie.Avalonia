<?php
namespace System\Diagnostics\CodeAnalysis;
final class ConstantExpectedAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Min;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Max;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 */
	public function __construct(){}
}