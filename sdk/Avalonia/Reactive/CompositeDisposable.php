<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositeDisposableMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 */
class CompositeDisposable extends \System\Object implements 
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $disposables
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToList($disposables){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\IDisposable $item
	 * @return \System\Void|void
	 */
	public  function Add($item){}
	/**
	 * @param \System\IDisposable $item
	 * @return \System\Boolean
	 */
	public  function Remove($item){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\IDisposable $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @param \System\IDisposable[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $arrayIndex){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @uses CompositeDisposableMethodsOverride::GetEnumerator_1 ()
	 * @uses CompositeDisposableMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDisposed(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
