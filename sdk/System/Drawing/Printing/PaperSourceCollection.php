<?php
namespace System\Drawing\Printing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PaperSourceCollectionMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function get_Count_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function get_Count_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($paperSources, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 */
class PaperSourceCollection extends \System\Object implements 
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Drawing\Printing\PaperSource
	 * @property
	 */
	public readonly $Item;
	/**
	 * @uses PaperSourceCollectionMethodsOverride::get_Count_1 ()
	 * @uses PaperSourceCollectionMethodsOverride::get_Count_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Count(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Drawing\Printing\PaperSource
	 */
	public  function get_Item($index){}
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
	 * @param \System\Drawing\Printing\PaperSource $paperSource
	 * @return \System\Int32|int
	 */
	public  function Add($paperSource){}
	/**
	 * @uses PaperSourceCollectionMethodsOverride::CopyTo_1 ($paperSources, $index)
	 * @uses PaperSourceCollectionMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses PaperSourceCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses PaperSourceCollectionMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
