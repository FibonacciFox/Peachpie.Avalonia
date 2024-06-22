<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FuncDataTemplateOverride {
	/**
	 * @param \System\Type $type
	 * @param \System\Func_3 $build [generic: System\Object,Avalonia\Controls\INameScope,Avalonia\Controls\Control]
	 * @param \System\Boolean|bool $supportsRecycling
	 */
	#[MethodOverride]public function __construct_1 ($type, $build, $supportsRecycling){}
	/**
	 * @param \System\Func_2 $match [generic: System\Object,System\Boolean]
	 * @param \System\Func_3 $build [generic: System\Object,Avalonia\Controls\INameScope,Avalonia\Controls\Control]
	 * @param \System\Boolean|bool $supportsRecycling
	 */
	#[MethodOverride]public function __construct_2 ($match, $build, $supportsRecycling){}
}
class FuncDataTemplate extends \Avalonia\Controls\Templates\FuncTemplate_2 implements
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\IRecyclingDataTemplate,
	\Avalonia\Controls\Templates\IDataTemplate
{
	use FuncDataTemplateOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Controls\Templates\FuncDataTemplate
	 */
	public static $Default;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Controls\Templates\FuncDataTemplate
	 */
	public static $Access;
	/**
	 * @param \System\Object|object $data
	 * @return \System\Boolean|bool
	 */
	public function Match($data){}
	private static function IsInstance($o, $t){}
	/**
	 * @uses FuncDataTemplateOverride::__construct_1 <br>public , args: ($type, $build, $supportsRecycling)<br>
	 * @uses FuncDataTemplateOverride::__construct_2 <br>public , args: ($match, $build, $supportsRecycling)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}