<?php
namespace Avalonia\Media;
final class FontSourceIdentifier extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Uri
	 */
	public $Source;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\FontSourceIdentifier $left
	 * @param \Avalonia\Media\FontSourceIdentifier $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\FontSourceIdentifier $left
	 * @param \Avalonia\Media\FontSourceIdentifier $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Uri $source
	 */
	public function __construct($name, $source){}
}