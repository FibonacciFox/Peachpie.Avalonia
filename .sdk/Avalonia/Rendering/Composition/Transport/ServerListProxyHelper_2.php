<?php
namespace Avalonia\Rendering\Composition\Transport;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ServerListProxyHelper_2Override {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride]public function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
}
class ServerListProxyHelper_2 extends \System\Object implements
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use ServerListProxyHelper_2Override;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \TClient
	 */
	public $Item;
	/**
	 * @uses ServerListProxyHelper_2Override::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses ServerListProxyHelper_2Override::GetEnumerator_2 <br>public , args: ()<br>
	 * @uses ServerListProxyHelper_2Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\Generic\List_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \TClient $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \TClient $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item){}
	/**
	 * @param \TClient $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $arrayIndex){}
	/**
	 * @param \TClient $item
	 * @return \System\Boolean|bool
	 */
	public function Remove($item){}
	/**
	 * @param \TClient $item
	 * @return \System\Int32|int
	 */
	public function IndexOf($item){}
	/**
	 * @param \System\Int32|int $index
	 * @param \TClient $item
	 * @return \System\Void|void
	 */
	public function Insert($index, $item){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @return \System\Void|void
	 */
	public function Serialize($writer){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\ServerListProxyHelper_2+IRegisterForSerialization $parent [generic: TClient,TServer]
	 */
	public function __construct($parent){}
}