<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SafeEnumerableList_1MethodsOverride
{
	/**
	 * @return \Avalonia\Utilities\Enumerator
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
 * @deprecated this element should not be used by you because it will break your program
 */
class SafeEnumerableList_1 extends \System\Object implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	protected  function get_Inner(){}
	/**
	 * @param \Avalonia\Utilities\T $item
	 * @return \System\Void|void
	 */
	public  function Add($item){}
	/**
	 * @param \Avalonia\Utilities\T $item
	 * @return \System\Boolean
	 */
	public  function Remove($item){}
	/**
	 * @uses SafeEnumerableList_1MethodsOverride::GetEnumerator_1 ()
	 * @uses SafeEnumerableList_1MethodsOverride::GetEnumerator_2 ()
	 * @uses SafeEnumerableList_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetList(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
