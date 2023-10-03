<?php
namespace Avalonia\Media\Fonts;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FamilyNameCollectionMethodsOverride
{
	/**
	 * @return \Avalonia\Utilities\ImmutableReadOnlyListStructEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
}
/**
 */
class FamilyNameCollection extends \System\Object implements 
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @param \System\String|string $names
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SplitNames($names){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PrimaryFamilyName(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasFallbacks(){}
	/**
	 * @uses FamilyNameCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses FamilyNameCollectionMethodsOverride::GetEnumerator_2 ()
	 * @uses FamilyNameCollectionMethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\Fonts\FamilyNameCollection $a
	 * @param \Avalonia\Media\Fonts\FamilyNameCollection $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \Avalonia\Media\Fonts\FamilyNameCollection $a
	 * @param \Avalonia\Media\Fonts\FamilyNameCollection $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\String|string
	 */
	public  function get_Item($index){}
}
