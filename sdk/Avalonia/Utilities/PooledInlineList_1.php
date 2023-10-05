<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PooledInlineList_1MethodsOverride
{
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \Avalonia\Utilities\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_3(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class PooledInlineList_1 extends \System\ValueType implements 
	\System\IDisposable,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertToList(){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function EnsureCapacity($count){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @uses PooledInlineList_1MethodsOverride::GetEnumerator_1 ()
	 * @uses PooledInlineList_1MethodsOverride::GetEnumerator_2 ()
	 * @uses PooledInlineList_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Object|object
	 */
	public  function TransferRawState(){}
}
