<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AsyncStateMachineBox_1Override {
	/**
	 * @param \System\Int32|int $relaxations
	 */
	#[MethodOverride]public function __construct_1 ($relaxations){}
	/**
	 * @param \System\Runtime\CompilerServices\CompilationRelaxations $relaxations
	 */
	#[MethodOverride]public function __construct_2 ($relaxations){}
}
class CompilationRelaxationsAttribute extends \System\Attribute
{
	use AsyncStateMachineBox_1Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $CompilationRelaxations;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses CompilationRelaxationsAttributeOverride::__construct_1 <br>public , args: ($relaxations)<br>
	 * @uses CompilationRelaxationsAttributeOverride::__construct_2 <br>public , args: ($relaxations)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}