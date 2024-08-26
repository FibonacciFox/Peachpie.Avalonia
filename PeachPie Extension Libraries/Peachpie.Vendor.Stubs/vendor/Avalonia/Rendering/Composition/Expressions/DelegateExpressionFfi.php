<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DelegateExpressionFfiOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Func_2 $cb [generic: System\Collections\Generic\IReadOnlyList_1[Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @param \System\Type ...$types
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_1 ($name, $cb, ...$types){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Func_2 $cb [generic: T1,Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_2 ($name, $cb){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Func_3 $cb [generic: T1,T2,Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_3 ($name, $cb){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Func_4 $cb [generic: T1,T2,T3,Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_4 ($name, $cb){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Func_5 $cb [generic: T1,T2,T3,T4,Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_5 ($name, $cb){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Func_6 $cb [generic: T1,T2,T3,T4,T5,Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_6 ($name, $cb){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Func_7 $cb [generic: T1,T2,T3,T4,T5,T6,Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_7 ($name, $cb){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Func_17 $cb [generic: T1,T2,T3,T4,T5,T6,T7,T8,T9,T10,T11,T12,T13,T14,T15,T16,Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Add_8 ($name, $cb){}
}
class DelegateExpressionFfi extends \System\Object implements
	\Avalonia\Rendering\Composition\Expressions\IExpressionForeignFunctionInterface,
	\System\Collections\IEnumerable
{
	use DelegateExpressionFfiOverride;

	/**
	 * @param \System\String|string $name
	 * @param \System\Collections\Generic\IReadOnlyList_1 $arguments [generic: Avalonia\Rendering\Composition\Expressions\ExpressionVariant]
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant& &$result
	 * @return \System\Boolean|bool
	 */
	public function Call($name, $arguments, &$result){}
	private function CallWithCast($countGroup, $arguments, &$result, $anyCast){}
	private function GetEnumerator(){}
	/**
	 * @uses DelegateExpressionFfiOverride::Add_1 <br>private , args: ($name, $cb, ...$types)<br>
	 * @uses DelegateExpressionFfiOverride::Add_2 <br>public , args: ($name, $cb)<br>
	 * @uses DelegateExpressionFfiOverride::Add_3 <br>public , args: ($name, $cb)<br>
	 * @uses DelegateExpressionFfiOverride::Add_4 <br>public , args: ($name, $cb)<br>
	 * @uses DelegateExpressionFfiOverride::Add_5 <br>public , args: ($name, $cb)<br>
	 * @uses DelegateExpressionFfiOverride::Add_6 <br>public , args: ($name, $cb)<br>
	 * @uses DelegateExpressionFfiOverride::Add_7 <br>public , args: ($name, $cb)<br>
	 * @uses DelegateExpressionFfiOverride::Add_8 <br>public , args: ($name, $cb)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 */
	public function __construct(){}
}