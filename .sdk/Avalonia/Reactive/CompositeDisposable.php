<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CompositeDisposableOverride {
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
	 * @param \System\Int32|int $capacity
	 */
	#[MethodOverride]public function __construct_1 ($capacity){}
	/**
	 * @param \System\IDisposable ...$disposables
	 */
	#[MethodOverride]public function __construct_2 (...$disposables){}
	/**
	 * @param \System\Collections\Generic\IList_1 $disposables [generic: System\IDisposable]
	 */
	#[MethodOverride]public function __construct_3 ($disposables){}
}
final class CompositeDisposable extends \System\Object implements
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
	use CompositeDisposableOverride;

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
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	private static function ToList($disposables){}
	/**
	 * @param \System\IDisposable $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @param \System\IDisposable $item
	 * @return \System\Boolean|bool
	 */
	public function Remove($item){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \System\IDisposable $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item){}
	/**
	 * @param \System\IDisposable $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $arrayIndex){}
	/**
	 * @uses CompositeDisposableOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses CompositeDisposableOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @uses CompositeDisposableOverride::__construct_1 <br>public , args: ($capacity)<br>
	 * @uses CompositeDisposableOverride::__construct_2 <br>public , args: (...$disposables)<br>
	 * @uses CompositeDisposableOverride::__construct_3 <br>public , args: ($disposables)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}