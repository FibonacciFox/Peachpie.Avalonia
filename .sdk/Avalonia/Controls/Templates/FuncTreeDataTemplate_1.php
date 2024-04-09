<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FuncTreeDataTemplate_1Override {
	/**
	 * @deprecated
	 * @param \System\Func_3 $f [generic: T,Avalonia\Controls\INameScope,TResult]
	 * @return \System\Func_3
	 */
	#[MethodOverride]private static function Cast_1 ($f){}
	/**
	 * @deprecated
	 * @param \System\Func_2 $f [generic: T,TResult]
	 * @return \System\Func_2
	 */
	#[MethodOverride]private static function Cast_2 ($f){}
	/**
	 * @param \System\Func_3 $build [generic: T,Avalonia\Controls\INameScope,Avalonia\Controls\Control]
	 * @param \System\Func_2 $itemsSelector [generic: T,System\Collections\IEnumerable]
	 */
	#[MethodOverride]public function __construct_1 ($build, $itemsSelector){}
	/**
	 * @param \System\Func_2 $match [generic: T,System\Boolean]
	 * @param \System\Func_3 $build [generic: T,Avalonia\Controls\INameScope,Avalonia\Controls\Control]
	 * @param \System\Func_2 $itemsSelector [generic: T,System\Collections\IEnumerable]
	 */
	#[MethodOverride]public function __construct_2 ($match, $build, $itemsSelector){}
}
class FuncTreeDataTemplate_1 extends \Avalonia\Controls\Templates\FuncTreeDataTemplate implements
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\IRecyclingDataTemplate,
	\Avalonia\Controls\Templates\IDataTemplate,
	\Avalonia\Controls\Templates\ITreeDataTemplate
{
	use FuncTreeDataTemplate_1Override;

	private static function CastMatch($f){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses FuncTreeDataTemplate_1Override::Cast_1 <br>private , args: ($f)<br>
	 * @uses FuncTreeDataTemplate_1Override::Cast_2 <br>private , args: ($f)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Func_3|\System\Func_2|mixed|\override
	 */
	#[MethodOverridePrivate]function Cast (\override ...$args){}
	/**
	 * @uses FuncTreeDataTemplate_1Override::__construct_1 <br>public , args: ($build, $itemsSelector)<br>
	 * @uses FuncTreeDataTemplate_1Override::__construct_2 <br>public , args: ($match, $build, $itemsSelector)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}