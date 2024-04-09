<?php
namespace System\Globalization;
final class SortVersion extends \System\Object implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $FullVersion;
	/**
	 * @property
	 * @var \System\Guid
	 * @since readonly
	 */
	public $SortId;
	/**
	 * @param \System\Globalization\SortVersion $left
	 * @param \System\Globalization\SortVersion $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Globalization\SortVersion $left
	 * @param \System\Globalization\SortVersion $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Int32|int $fullVersion
	 * @param \System\Guid $sortId
	 */
	public function __construct($fullVersion, $sortId){}
}