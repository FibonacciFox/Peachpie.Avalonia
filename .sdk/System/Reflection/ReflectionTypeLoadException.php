<?php
namespace System\Reflection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReflectionTypeLoadExceptionOverride {
	/**
	 * @param \System\Type $classes
	 * @param \System\Exception $exceptions
	 */
	#[MethodOverride]public function __construct_1 ($classes, $exceptions){}
	/**
	 * @param \System\Type $classes
	 * @param \System\Exception $exceptions
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($classes, $exceptions, $message){}
}
final class ReflectionTypeLoadException extends \System\SystemException implements
	\System\Runtime\Serialization\ISerializable
{
	use ReflectionTypeLoadExceptionOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Type[]
	 * @since readonly
	 */
	public $Types;
	/**
	 * @property
	 * @var \System\Exception[]
	 * @since readonly
	 */
	public $LoaderExceptions;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\Reflection\MethodBase
	 * @since readonly
	 */
	public $TargetSite;
	/**
	 * @property
	 * @var \System\Collections\IDictionary
	 * @since readonly
	 */
	public $Data;
	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $InnerException;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $HelpLink;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Source;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $HResult;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $StackTrace;
	private function CreateString($isMessage){}
	/**
	 * @uses ReflectionTypeLoadExceptionOverride::__construct_1 <br>public , args: ($classes, $exceptions)<br>
	 * @uses ReflectionTypeLoadExceptionOverride::__construct_2 <br>public , args: ($classes, $exceptions, $message)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}