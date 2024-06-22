<?php
namespace Avalonia\Rendering;
final class OwnedDisposable_1 extends \System\ValueType implements
	\System\IDisposable
{

	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \T|object $value
	 * @param \System\Boolean|bool $owns
	 */
	public function __construct($value, $owns){}
}