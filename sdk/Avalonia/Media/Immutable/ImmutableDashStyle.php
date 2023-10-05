<?php
namespace Avalonia\Media\Immutable;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmutableDashStyleMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class ImmutableDashStyle extends \System\Object implements 
	\Avalonia\Media\IDashStyle,
	\System\IEquatable_1
{
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Double]
	 * @property
	 */
	public readonly $Dashes;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Offset;
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_Dashes(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Offset(){}
	/**
	 * @uses ImmutableDashStyleMethodsOverride::Equals_1 ($obj)
	 * @uses ImmutableDashStyleMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Double[] $left
	 * @param \System\Collections\Generic\IReadOnlyList_1 $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SequenceEqual($left, $right){}
}
