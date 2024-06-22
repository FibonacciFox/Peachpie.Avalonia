<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CompositionVisualCollectionOverride {
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function RegisterForSerialization_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
}
class CompositionVisualCollection extends \Avalonia\Rendering\Composition\CompositionObject implements
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Rendering\Composition\Transport\IRegisterForSerialization,
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use CompositionVisualCollectionOverride;

	/**
	 * @field
	 * @var \Avalonia\Utilities\InlineDictionary_2[Avalonia\Rendering\Composition\Server\CompositionProperty,Avalonia\Rendering\Composition\Animations\IAnimationInstance]
	 */
	protected $PendingAnimations;
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
	 * @var \Avalonia\Rendering\Composition\CompositionVisual
	 */
	public $Item;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\ImplicitAnimationCollection
	 */
	public $ImplicitAnimations;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @since readonly
	 */
	public $Compositor;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $newChild
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $sibling
	 * @return \System\Void|void
	 */
	public function InsertAbove($newChild, $sibling){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $newChild
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $sibling
	 * @return \System\Void|void
	 */
	public function InsertBelow($newChild, $sibling){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $newChild
	 * @return \System\Void|void
	 */
	public function InsertAtTop($newChild){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $newChild
	 * @return \System\Void|void
	 */
	public function InsertAtBottom($newChild){}
	/**
	 * @return \System\Void|void
	 */
	public function RemoveAll(){}
	private function InitializeDefaults(){}
	/**
	 * @uses CompositionVisualCollectionOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses CompositionVisualCollectionOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses CompositionVisualCollectionOverride::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\List_1|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $arrayIndex){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @return \System\Boolean|bool
	 */
	public function Remove($item){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @return \System\Int32|int
	 */
	public function IndexOf($item){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Rendering\Composition\CompositionVisual $item
	 * @return \System\Void|void
	 */
	public function Insert($index, $item){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
	private function OnBeforeAdded($item){}
	private function OnAdded($item){}
	private function OnRemoved($item){}
	private function OnBeforeClear(){}
	private function OnBeforeReplace($oldItem, $newItem){}
	private function OnReplace($oldItem, $newItem){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
}