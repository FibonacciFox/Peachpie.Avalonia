<?php
namespace System\Drawing\Printing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PaperSizeCollectionMethodsOverride
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
	#[MethodOverride] public  function CopyTo_1($paperSizes, $index){}
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
class PaperSizeCollection extends \System\Object implements 
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Drawing\Printing\PaperSize
	 * @property
	 */
	public readonly $Item;
	/**
	 * @uses PaperSizeCollectionMethodsOverride::get_Count_1 ()
	 * @uses PaperSizeCollectionMethodsOverride::get_Count_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Count(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Drawing\Printing\PaperSize
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
	 * @param \System\Drawing\Printing\PaperSize $paperSize
	 * @return \System\Int32|int
	 */
	public  function Add($paperSize){}
	/**
	 * @uses PaperSizeCollectionMethodsOverride::CopyTo_1 ($paperSizes, $index)
	 * @uses PaperSizeCollectionMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses PaperSizeCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses PaperSizeCollectionMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
