<?php
namespace Avalonia\Rendering\Composition\Animations;
class KeyFrames_1 extends \System\Collections\Generic\List_1 implements
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\Avalonia\Rendering\Composition\Animations\IKeyFrames
{
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Animations\KeyFrame_1[T][]
	 */
	protected $_items;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_size;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Animations\KeyFrame_1[T]
	 */
	public $Item;
	private function Validate($key){}
	/**
	 * @param \System\Single $normalizedProgressKey
	 * @param \System\String|string $value
	 * @param \Avalonia\Animation\Easings\IEasing $easingFunction
	 * @return \System\Void|void
	 */
	public function InsertExpressionKeyFrame($normalizedProgressKey, $value, $easingFunction){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\ServerKeyFrame_1[T][]
	 */
	public function Snapshot(){}
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 */
	public function __construct(){}
}