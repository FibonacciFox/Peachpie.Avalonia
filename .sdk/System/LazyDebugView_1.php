<?php
namespace System;
final class LazyDebugView_1 extends \System\Object
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsValueCreated;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Threading\LazyThreadSafetyMode]
	 * @since readonly
	 */
	public $Mode;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsValueFaulted;
	/**
	 * @param \System\Lazy_1 $lazy [generic: T]
	 */
	public function __construct($lazy){}
}