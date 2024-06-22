<?php
namespace System\Runtime\Versioning;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FrameworkNameOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
}
final class RequiresPreviewFeaturesAttribute extends \System\Attribute
{
	use FrameworkNameOverride;

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Url;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses RequiresPreviewFeaturesAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses RequiresPreviewFeaturesAttributeOverride::__construct_2 <br>public , args: ($message)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}