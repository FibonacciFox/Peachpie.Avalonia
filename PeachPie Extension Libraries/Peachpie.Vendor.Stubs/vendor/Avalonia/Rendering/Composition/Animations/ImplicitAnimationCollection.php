<?php
namespace Avalonia\Rendering\Composition\Animations;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImplicitAnimationCollectionOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $item [generic: System\String,Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_1 ($item){}
	/**
	 * @deprecated
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_2 ($key, $value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\KeyValuePair_2 $item [generic: System\String,Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Remove_1 ($item){}
	/**
	 * @deprecated
	 * @param \System\String|string $key
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_2 ($key){}
}
class ImplicitAnimationCollection extends \Avalonia\Rendering\Composition\CompositionObject implements
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use ImplicitAnimationCollectionOverride;
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
	 * @var \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\UInt32
	 * @since readonly
	 */
	public $Size;
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
	 * @uses ImplicitAnimationCollectionOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses ImplicitAnimationCollectionOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @uses ImplicitAnimationCollectionOverride::Add_1 <br>private , args: ($item)<br>
	 * @uses ImplicitAnimationCollectionOverride::Add_2 <br>public , args: ($key, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	private function Contains($item){}
	private function CopyTo($array, $arrayIndex){}
	/**
	 * @uses ImplicitAnimationCollectionOverride::Remove_1 <br>private , args: ($item)<br>
	 * @uses ImplicitAnimationCollectionOverride::Remove_2 <br>public , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	private function get_IsReadOnly(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Boolean|bool
	 */
	public function ContainsKey($key){}
	/**
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$value){}
	private function get_Keys(){}
	private function get_Values(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyDictionary_2[System\String,Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase]
	 */
	public function GetView(){}
	/**
	 * @param \System\String|string $key
	 * @return \System\Boolean|bool
	 */
	public function HasKey($key){}
	/**
	 * @param \System\String|string $key
	 * @param \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase $animation
	 * @return \System\Void|void
	 */
	public function Insert($key, $animation){}
	/**
	 * @param \System\String|string $key
	 * @return \Avalonia\Rendering\Composition\Animations\ICompositionAnimationBase
	 */
	public function Lookup($key){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
}