<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FuncDataTemplate_1MethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function Build_1($data, $existing){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function Build_2($param){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class FuncDataTemplate_1 extends \Avalonia\Controls\Templates\FuncDataTemplate implements 
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\IRecyclingDataTemplate,
	\Avalonia\Controls\Templates\IDataTemplate
{
	/**
	 * @param \System\Func_2 $f
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CastMatch($f){}
	/**
	 * @param \System\Func_3 $f
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CastBuild($f){}
	/**
	 * @uses FuncDataTemplate_1MethodsOverride::Build_1 ($data, $existing)
	 * @uses FuncDataTemplate_1MethodsOverride::Build_2 ($param)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Build(mixed ...$args){}
}
