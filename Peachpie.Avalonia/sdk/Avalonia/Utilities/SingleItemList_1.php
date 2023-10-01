<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SingleItemList_1MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Promote_1($oldList){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Promote_2($oldList){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SingleItemList_1 extends \Avalonia\Utilities\FrugalListBase_1
{
	/**
	 * @uses SingleItemList_1MethodsOverride::Promote_1 ($oldList)
	 * @uses SingleItemList_1MethodsOverride::Promote_2 ($oldList)
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
