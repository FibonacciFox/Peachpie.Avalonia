<?php
namespace System\IO\Enumeration;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FileSystemEnumerable_1Override {
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
}
class FileSystemEnumerable_1 extends \System\Object implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use FileSystemEnumerable_1Override;

	/**
	 * @property
	 * @var \System\IO\Enumeration\FileSystemEnumerable_1+FindPredicate[TResult]
	 */
	public $ShouldIncludePredicate;
	/**
	 * @property
	 * @var \System\IO\Enumeration\FileSystemEnumerable_1+FindPredicate[TResult]
	 */
	public $ShouldRecursePredicate;
	/**
	 * @uses FileSystemEnumerable_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses FileSystemEnumerable_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \System\String|string $directory
	 * @param \System\IO\Enumeration\FileSystemEnumerable_1+FindTransform $transform [generic: TResult]
	 * @param \System\IO\EnumerationOptions $options
	 */
	public function __construct($directory, $transform, $options){}
}