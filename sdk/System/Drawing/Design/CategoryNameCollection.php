<?php
namespace System\Drawing\Design;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CategoryNameCollectionMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
}
/**
 */
class CategoryNameCollection extends \System\Collections\ReadOnlyCollectionBase implements 
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @param \System\Int32|int $index
	 * @return \System\String|string
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public  function Contains($value){}
	/**
	 * @uses CategoryNameCollectionMethodsOverride::CopyTo_1 ($array, $index)
	 * @uses CategoryNameCollectionMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Int32|int
	 */
	public  function IndexOf($value){}
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
}
