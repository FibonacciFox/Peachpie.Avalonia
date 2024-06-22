<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ExpressionTrackedObjectsOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\List_1
	 */
	#[MethodOverride]public function GetEnumerator_3 (){}
}
class ExpressionTrackedObjects extends \System\Object implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	use ExpressionTrackedObjectsOverride;


	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\IExpressionObject $obj
	 * @param \System\String|string $member
	 * @return \System\Void|void
	 */
	public function Add($obj, $member){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @uses ExpressionTrackedObjectsOverride::GetEnumerator_1 <br>private , args: ()<br>
	 * @uses ExpressionTrackedObjectsOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses ExpressionTrackedObjectsOverride::GetEnumerator_3 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|\System\Collections\Generic\List_1|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 */
	public function __construct(){}
}