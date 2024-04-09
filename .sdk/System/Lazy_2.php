<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LazyHelperOverride {
	/**
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @param \TMetadata $metadata
	 */
	#[MethodOverride]public function __construct_1 ($valueFactory, $metadata){}
	/**
	 * @param \TMetadata $metadata
	 */
	#[MethodOverride]public function __construct_2 ($metadata){}
	/**
	 * @param \TMetadata $metadata
	 * @param \System\Boolean|bool $isThreadSafe
	 */
	#[MethodOverride]public function __construct_3 ($metadata, $isThreadSafe){}
	/**
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @param \TMetadata $metadata
	 * @param \System\Boolean|bool $isThreadSafe
	 */
	#[MethodOverride]public function __construct_4 ($valueFactory, $metadata, $isThreadSafe){}
	/**
	 * @param \TMetadata $metadata
	 * @param \System\Threading\LazyThreadSafetyMode $mode
	 */
	#[MethodOverride]public function __construct_5 ($metadata, $mode){}
	/**
	 * @param \System\Func_1 $valueFactory [generic: T]
	 * @param \TMetadata $metadata
	 * @param \System\Threading\LazyThreadSafetyMode $mode
	 */
	#[MethodOverride]public function __construct_6 ($valueFactory, $metadata, $mode){}
}
class Lazy_2 extends \System\Lazy_1
{
	use LazyHelperOverride;
	/**
	 * @property
	 * @var \TMetadata
	 * @since readonly
	 */
	public $Metadata;
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
	/**
	 * @uses Lazy_2Override::__construct_1 <br>public , args: ($valueFactory, $metadata)<br>
	 * @uses Lazy_2Override::__construct_2 <br>public , args: ($metadata)<br>
	 * @uses Lazy_2Override::__construct_3 <br>public , args: ($metadata, $isThreadSafe)<br>
	 * @uses Lazy_2Override::__construct_4 <br>public , args: ($valueFactory, $metadata, $isThreadSafe)<br>
	 * @uses Lazy_2Override::__construct_5 <br>public , args: ($metadata, $mode)<br>
	 * @uses Lazy_2Override::__construct_6 <br>public , args: ($valueFactory, $metadata, $mode)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}