<?php
namespace Avalonia\Controls\Utils;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FastRepeat_1MethodsOverride
{
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class FastRepeat_1 extends \System\Object implements 
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @var \Avalonia\Controls\Utils\CollectionUtils+FastRepeat_1[T]
	 * @field
	 */
	public readonly $Instance;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \T
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Count($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \Avalonia\Controls\Utils\T
	 */
	public  function get_Item(){}
	/**
	 * @param \Avalonia\Controls\Utils\T $value
	 * @return \System\Void|void
	 */
	public  function set_Item($value){}
	/**
	 * @param \Avalonia\Controls\Utils\T $item
	 * @return \System\Void|void
	 */
	public  function Add($item){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \Avalonia\Controls\Utils\T $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @param \Avalonia\Controls\Utils\T $item
	 * @return \System\Boolean
	 */
	public  function Remove($item){}
	/**
	 * @uses FastRepeat_1MethodsOverride::GetEnumerator_1 ()
	 * @uses FastRepeat_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\Utils\T[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $arrayIndex){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
