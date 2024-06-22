<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FuncDataTemplate_1Override {
	/**
	 * @param \System\Func_3 $build [generic: T,Avalonia\Controls\INameScope,Avalonia\Controls\Control]
	 * @param \System\Boolean|bool $supportsRecycling
	 */
	#[MethodOverride]public function __construct_1 ($build, $supportsRecycling){}
	/**
	 * @param \System\Func_2 $match [generic: T,System\Boolean]
	 * @param \System\Func_3 $build [generic: T,Avalonia\Controls\INameScope,Avalonia\Controls\Control]
	 * @param \System\Boolean|bool $supportsRecycling
	 */
	#[MethodOverride]public function __construct_2 ($match, $build, $supportsRecycling){}
	/**
	 * @param \System\Func_2 $match [generic: T,System\Boolean]
	 * @param \System\Func_2 $build [generic: T,Avalonia\Controls\Control]
	 * @param \System\Boolean|bool $supportsRecycling
	 */
	#[MethodOverride]public function __construct_3 ($match, $build, $supportsRecycling){}
}
class FuncDataTemplate_1 extends \Avalonia\Controls\Templates\FuncDataTemplate implements
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\IRecyclingDataTemplate,
	\Avalonia\Controls\Templates\IDataTemplate
{
	use FuncDataTemplate_1Override;


	private static function CastMatch($f){}
	private static function CastBuild($f){}
	/**
	 * @uses FuncDataTemplate_1Override::__construct_1 <br>public , args: ($build, $supportsRecycling)<br>
	 * @uses FuncDataTemplate_1Override::__construct_2 <br>public , args: ($match, $build, $supportsRecycling)<br>
	 * @uses FuncDataTemplate_1Override::__construct_3 <br>public , args: ($match, $build, $supportsRecycling)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}