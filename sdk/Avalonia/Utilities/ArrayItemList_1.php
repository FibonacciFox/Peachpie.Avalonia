<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArrayItemList_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Promote_1($oldList){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Promote_2($oldList){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Promote_3($oldList){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ArrayItemList_1 extends \Avalonia\Utilities\FrugalListBase_1
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_count;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Capacity;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @uses ArrayItemList_1MethodsOverride::Promote_1 ($oldList)
	 * @uses ArrayItemList_1MethodsOverride::Promote_2 ($oldList)
	 * @uses ArrayItemList_1MethodsOverride::Promote_3 ($oldList)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Promote(mixed ...$args){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetCount($value){}
}
