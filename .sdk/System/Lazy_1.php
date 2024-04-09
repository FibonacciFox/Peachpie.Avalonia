<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LazyHelperOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \T|object $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
	/**
	 * @param \System\Func_1 $valueFactory [generic: T]
	 */
	#[MethodOverride]public function __construct_3 ($valueFactory){}
	/**
	 * @param \System\Boolean|bool $isThreadSafe
	 */
	#[MethodOverride]public function __construct_4 ($isThreadSafe){}
	/**
	 * @param \System\Threading\LazyThreadSafetyMode $mode
	 */
	#[MethodOverride]public function __construct_5 ($mode){}
	/**
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @param \System\Boolean|bool $isThreadSafe
	 */
	#[MethodOverride]public function __construct_6 ($valueFactory, $isThreadSafe){}
	/**
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @param \System\Threading\LazyThreadSafetyMode $mode
	 */
	#[MethodOverride]public function __construct_7 ($valueFactory, $mode){}
}
class Lazy_1 extends \System\Object
{
	use LazyHelperOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsValueCreated;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Value;
	private static function CreateViaDefaultConstructor(){}
	private function ViaConstructor(){}
	private function ViaFactory($mode){}
	private function ExecutionAndPublication($executionAndPublication, $useDefaultConstructor){}
	private function PublicationOnly($publicationOnly, $possibleValue){}
	private function PublicationOnlyViaConstructor($initializer){}
	private function PublicationOnlyViaFactory($initializer){}
	private function PublicationOnlyWaitForOtherThreadToPublish(){}
	private function CreateValue(){}
	/**
	 * @uses Lazy_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses Lazy_1Override::__construct_2 <br>public , args: ($value)<br>
	 * @uses Lazy_1Override::__construct_3 <br>public , args: ($valueFactory)<br>
	 * @uses Lazy_1Override::__construct_4 <br>public , args: ($isThreadSafe)<br>
	 * @uses Lazy_1Override::__construct_5 <br>public , args: ($mode)<br>
	 * @uses Lazy_1Override::__construct_6 <br>public , args: ($valueFactory, $isThreadSafe)<br>
	 * @uses Lazy_1Override::__construct_7 <br>public , args: ($valueFactory, $mode)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}