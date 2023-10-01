<?php
namespace Avalonia\Collections\Pooled;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PooledStack_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($span){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_3($array, $arrayIndex){}
	/**
	 * @return \Avalonia\Collections\Pooled\Enumerator
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
class PooledStack_1 extends \System\Object implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\IDisposable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \Avalonia\Collections\Pooled\ClearMode
	 */
	public  function get_ClearMode(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsSynchronized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SyncRoot(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \Avalonia\Collections\Pooled\T $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @param \System\Func_2 $match
	 * @return \System\Int32|int
	 */
	public  function RemoveWhere($match){}
	/**
	 * @uses PooledStack_1MethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses PooledStack_1MethodsOverride::CopyTo_2 ($span)
	 * @uses PooledStack_1MethodsOverride::CopyTo_3 ($array, $arrayIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses PooledStack_1MethodsOverride::GetEnumerator_1 ()
	 * @uses PooledStack_1MethodsOverride::GetEnumerator_2 ()
	 * @uses PooledStack_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function TrimExcess(){}
	/**
	 * @return \Avalonia\Collections\Pooled\T
	 */
	public  function Peek(){}
	/**
	 * @param \Avalonia\Collections\Pooled\T& $result
	 * @return \System\Boolean
	 */
	public  function TryPeek($result){}
	/**
	 * @return \Avalonia\Collections\Pooled\T
	 */
	public  function Pop(){}
	/**
	 * @param \Avalonia\Collections\Pooled\T& $result
	 * @return \System\Boolean
	 */
	public  function TryPop($result){}
	/**
	 * @param \Avalonia\Collections\Pooled\T $item
	 * @return \System\Void|void
	 */
	public  function Push($item){}
	/**
	 * @param \Avalonia\Collections\Pooled\T $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PushWithResize($item){}
	/**
	 * @return \Avalonia\Collections\Pooled\T[]
	 */
	public  function ToArray(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowForEmptyStack(){}
	/**
	 * @param \Avalonia\Collections\Pooled\T[] $replaceWith
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReturnArray($replaceWith){}
	/**
	 * @param \Avalonia\Collections\Pooled\ClearMode $mode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ShouldClear($mode){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $sender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeserialization($sender){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
