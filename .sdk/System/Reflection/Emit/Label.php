<?php
namespace System\Reflection\Emit;
final class Label extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $m_label;
	/**
	 * @return \System\Int32|int
	 */
	protected function GetLabelValue(){}
	/**
	 * @param \System\Reflection\Emit\Label $a
	 * @param \System\Reflection\Emit\Label $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Reflection\Emit\Label $a
	 * @param \System\Reflection\Emit\Label $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
}