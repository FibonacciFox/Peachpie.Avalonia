<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FuncDataTemplateMethodsOverride
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
 */
class FuncDataTemplate extends \Avalonia\Controls\Templates\FuncTemplate_2 implements 
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\IRecyclingDataTemplate,
	\Avalonia\Controls\Templates\IDataTemplate
{
	/**
	 * @param \System\Object|object $data
	 * @return \System\Boolean
	 */
	public  function Match($data){}
	/**
	 * @uses FuncDataTemplateMethodsOverride::Build_1 ($data, $existing)
	 * @uses FuncDataTemplateMethodsOverride::Build_2 ($param)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Build(mixed ...$args){}
	/**
	 * @param \System\Object|object $o
	 * @param \System\Type $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInstance($o, $t){}
}
