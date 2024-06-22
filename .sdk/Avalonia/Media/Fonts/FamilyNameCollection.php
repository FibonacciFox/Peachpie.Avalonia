<?php
namespace Avalonia\Media\Fonts;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FamilyNameCollectionOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Utilities\ImmutableReadOnlyListStructEnumerator_1
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
final class FamilyNameCollection extends \System\Object implements
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use FamilyNameCollectionOverride;

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $PrimaryFamilyName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasFallbacks;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Item;
	private static function SplitNames($names){}
	/**
	 * @uses FamilyNameCollectionOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses FamilyNameCollectionOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses FamilyNameCollectionOverride::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Utilities\ImmutableReadOnlyListStructEnumerator_1|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \Avalonia\Media\Fonts\FamilyNameCollection $a
	 * @param \Avalonia\Media\Fonts\FamilyNameCollection $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \Avalonia\Media\Fonts\FamilyNameCollection $a
	 * @param \Avalonia\Media\Fonts\FamilyNameCollection $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\String|string $familyNames
	 */
	public function __construct($familyNames){}
}