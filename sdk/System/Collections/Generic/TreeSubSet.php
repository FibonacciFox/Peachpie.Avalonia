<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TreeSubSetMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function GetObjectData_1($info, $context){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function GetObjectData_2($info, $context){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function GetObjectData_3($info, $context){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnDeserialization_1($sender){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function OnDeserialization_2($sender){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnDeserialization_3($sender){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Add_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_2($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($array, $index, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_4($array, $index){}
	/**
	 * @return \System\Collections\Generic\Enumerator
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
class TreeSubSet extends \System\Collections\Generic\SortedSet_1 implements 
	\System\Collections\Generic\ISet_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IReadOnlySet_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\Generic\IComparer_1[T]
	 * @property
	 */
	public readonly $Comparer;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Min;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Max;
	/**
	 * @param \System\Boolean $updateCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function VersionCheckImpl($updateCount){}
	/**
	 * @uses TreeSubSetMethodsOverride::GetObjectData_1 ($info, $context)
	 * @uses TreeSubSetMethodsOverride::GetObjectData_2 ($info, $context)
	 * @uses TreeSubSetMethodsOverride::GetObjectData_3 ($info, $context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetObjectData(mixed ...$args){}
	/**
	 * @uses TreeSubSetMethodsOverride::OnDeserialization_1 ($sender)
	 * @uses TreeSubSetMethodsOverride::OnDeserialization_2 ($sender)
	 * @uses TreeSubSetMethodsOverride::OnDeserialization_3 ($sender)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnDeserialization(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
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
	 * @uses TreeSubSetMethodsOverride::Add_1 ($item)
	 * @uses TreeSubSetMethodsOverride::Add_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses TreeSubSetMethodsOverride::CopyTo_1 ($array)
	 * @uses TreeSubSetMethodsOverride::CopyTo_2 ($array, $index)
	 * @uses TreeSubSetMethodsOverride::CopyTo_3 ($array, $index, $count)
	 * @uses TreeSubSetMethodsOverride::CopyTo_4 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses TreeSubSetMethodsOverride::GetEnumerator_1 ()
	 * @uses TreeSubSetMethodsOverride::GetEnumerator_2 ()
	 * @uses TreeSubSetMethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
}
