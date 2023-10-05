<?php
namespace Avalonia\Rendering\Composition\Transport;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerListProxyHelper_2MethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ServerListProxyHelper_2 extends \System\Object implements 
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \TClient
	 * @property
	 */
	public $Item;
	/**
	 * @uses ServerListProxyHelper_2MethodsOverride::GetEnumerator_1 ()
	 * @uses ServerListProxyHelper_2MethodsOverride::GetEnumerator_2 ()
	 * @uses ServerListProxyHelper_2MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\TClient $item
	 * @return \System\Void|void
	 */
	public  function Add($item){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\TClient $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\TClient[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $arrayIndex){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\TClient $item
	 * @return \System\Boolean
	 */
	public  function Remove($item){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\TClient $item
	 * @return \System\Int32|int
	 */
	public  function IndexOf($item){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Rendering\Composition\Transport\TClient $item
	 * @return \System\Void|void
	 */
	public  function Insert($index, $item){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function RemoveAt($index){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Rendering\Composition\Transport\TClient
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Rendering\Composition\Transport\TClient $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @return \System\Void|void
	 */
	public  function Serialize($writer){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
