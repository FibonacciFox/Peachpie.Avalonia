<?php
namespace System\Runtime\CompilerServices;
final class ConcreteFormattableString extends \System\FormattableString implements
	\System\IFormattable
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Format;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ArgumentCount;

}