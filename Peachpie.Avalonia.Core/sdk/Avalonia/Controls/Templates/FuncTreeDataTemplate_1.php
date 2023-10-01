<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FuncTreeDataTemplate_1MethodsOverride
{
	/**
	 * @return \System\Func_3
	 */
	#[MethodOverride] private static function Cast_1($f){}
	/**
	 * @return \System\Func_2
	 */
	#[MethodOverride] private static function Cast_2($f){}
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
class FuncTreeDataTemplate_1 extends \Avalonia\Controls\Templates\FuncTreeDataTemplate implements 
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\IRecyclingDataTemplate,
	\Avalonia\Controls\Templates\IDataTemplate,
	\Avalonia\Controls\Templates\ITreeDataTemplate
{
	/**
	 * @param \System\Func_2 $f
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CastMatch($f){}
	/**
	 * @uses FuncTreeDataTemplate_1MethodsOverride::Cast_1 ($f)
	 * @uses FuncTreeDataTemplate_1MethodsOverride::Cast_2 ($f)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Cast(mixed ...$args){}
	/**
	 * @uses FuncTreeDataTemplate_1MethodsOverride::Build_1 ($data, $existing)
	 * @uses FuncTreeDataTemplate_1MethodsOverride::Build_2 ($param)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Build(mixed ...$args){}
}
