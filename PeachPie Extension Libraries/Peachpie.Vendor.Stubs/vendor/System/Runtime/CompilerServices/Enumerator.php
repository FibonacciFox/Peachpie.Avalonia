<?php
namespace System\Runtime\CompilerServices;
final class Enumerator extends \System\ValueType
{
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Runtime\CompilerServices\ConfiguredValueTaskAwaitable_1[System\Boolean]
	 */
	public function MoveNextAsync(){}
	/**
	 * @return \System\Runtime\CompilerServices\ConfiguredValueTaskAwaitable
	 */
	public function DisposeAsync(){}
}