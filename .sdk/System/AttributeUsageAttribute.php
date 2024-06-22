<?php
namespace System;
final class AttributeUsageAttribute extends \System\Attribute
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\AttributeUsageAttribute
	 */
	protected static $Default;
	/**
	 * @property
	 * @var \System\AttributeTargets
	 * @since readonly
	 */
	public $ValidOn;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AllowMultiple;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Inherited;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\AttributeTargets $validOn
	 */
	public function __construct($validOn){}
}