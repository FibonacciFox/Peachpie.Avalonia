<?php
namespace System\Runtime\CompilerServices;
final class DefaultDependencyAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Runtime\CompilerServices\LoadHint
	 * @since readonly
	 */
	public $LoadHint;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Runtime\CompilerServices\LoadHint $loadHintArgument
	 */
	public function __construct($loadHintArgument){}
}