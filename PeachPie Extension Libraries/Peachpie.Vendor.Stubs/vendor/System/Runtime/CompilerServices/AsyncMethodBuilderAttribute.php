<?php
namespace System\Runtime\CompilerServices;
final class AsyncMethodBuilderAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $BuilderType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $builderType
	 */
	public function __construct($builderType){}
}