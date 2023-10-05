<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ValueSingleOrList_1 extends \System\ValueType
{
	/**
	 * @var \T
	 * @property
	 */
	public $Single;
	/**
	 * @var \System\Collections\Generic\List_1[T]
	 * @property
	 */
	public $List;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasList;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSingle;
	/**
	 * @return \Avalonia\Utilities\T
	 */
	public  function get_Single(){}
	/**
	 * @param \Avalonia\Utilities\T $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Single($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_List(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_List($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasList(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSingle(){}
	/**
	 * @param \Avalonia\Utilities\T $value
	 * @return \System\Void|void
	 */
	public  function Add($value){}
	/**
	 * @param \Avalonia\Utilities\T $value
	 * @return \System\Boolean
	 */
	public  function Remove($value){}
}
