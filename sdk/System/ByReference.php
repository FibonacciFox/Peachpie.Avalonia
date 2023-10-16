<?php
namespace System;
/**
 */
class ByReference extends \System\ValueType
{
	/**
	 * @var \System\Byte&
	 * @field
	 */
	public readonly $Value;
	/**
	 * @param \System\T& $p
	 * @return \System\ByReference
	 */
	public static function Create($p){}
}
