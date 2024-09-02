<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FuncTreeDataTemplateOverride {
	/**
	 * @param \System\Type $type
	 * @param \System\Func_3 $build [generic: System\Object,Avalonia\Controls\INameScope,Avalonia\Controls\Control]
	 * @param \System\Func_2 $itemsSelector [generic: System\Object,System\Collections\IEnumerable]
	 */
	#[MethodOverride]public function __construct_1 ($type, $build, $itemsSelector){}
	/**
	 * @param \System\Func_2 $match [generic: System\Object,System\Boolean]
	 * @param \System\Func_3 $build [generic: System\Object,Avalonia\Controls\INameScope,Avalonia\Controls\Control]
	 * @param \System\Func_2 $itemsSelector [generic: System\Object,System\Collections\IEnumerable]
	 */
	#[MethodOverride]public function __construct_2 ($match, $build, $itemsSelector){}
}
class FuncTreeDataTemplate extends \Avalonia\Controls\Templates\FuncDataTemplate implements
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\IRecyclingDataTemplate,
	\Avalonia\Controls\Templates\IDataTemplate,
	\Avalonia\Controls\Templates\ITreeDataTemplate
{
	use FuncTreeDataTemplateOverride;

	/**
	 * @param \System\Object|object $item
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public function ItemsSelector($item){}
	/**
	 * @uses FuncTreeDataTemplateOverride::__construct_1 <br>public , args: ($type, $build, $itemsSelector)<br>
	 * @uses FuncTreeDataTemplateOverride::__construct_2 <br>public , args: ($match, $build, $itemsSelector)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}