<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FuncTreeDataTemplateMethodsOverride
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
class FuncTreeDataTemplate extends \Avalonia\Controls\Templates\FuncDataTemplate implements 
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\IRecyclingDataTemplate,
	\Avalonia\Controls\Templates\IDataTemplate,
	\Avalonia\Controls\Templates\ITreeDataTemplate
{
	/**
	 * @param \System\Object|object $item
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public  function ItemsSelector($item){}
	/**
	 * @uses FuncTreeDataTemplateMethodsOverride::Build_1 ($data, $existing)
	 * @uses FuncTreeDataTemplateMethodsOverride::Build_2 ($param)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Build(mixed ...$args){}
}
