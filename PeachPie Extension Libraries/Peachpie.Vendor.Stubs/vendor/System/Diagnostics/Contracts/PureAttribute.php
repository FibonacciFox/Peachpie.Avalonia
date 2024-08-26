<?php
namespace System\Diagnostics\Contracts;
final class PureAttribute extends \System\Attribute
{
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