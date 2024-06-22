<?php
namespace System\IO;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FileLoadExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $inner
	 */
	#[MethodOverride]public function __construct_3 ($message, $inner){}
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $fileName
	 */
	#[MethodOverride]public function __construct_4 ($message, $fileName){}
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $fileName
	 * @param \System\Exception $inner
	 */
	#[MethodOverride]public function __construct_5 ($message, $fileName, $inner){}
}
class FileLoadException extends \System\IO\IOException implements
	\System\Runtime\Serialization\ISerializable
{
	use FileLoadExceptionOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FileName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $FusionLog;
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
	/**
	 * @param \System\String|string $fileName
	 * @param \System\Int32|int $hResult
	 * @return \System\String|string
	 */
	protected static function FormatFileLoadExceptionMessage($fileName, $hResult){}
	private static function GetFileLoadExceptionMessage($hResult, $retString){}
	private static function GetMessageForHR($hresult, $retString){}
	/**
	 * @uses FileLoadExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses FileLoadExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses FileLoadExceptionOverride::__construct_3 <br>public , args: ($message, $inner)<br>
	 * @uses FileLoadExceptionOverride::__construct_4 <br>public , args: ($message, $fileName)<br>
	 * @uses FileLoadExceptionOverride::__construct_5 <br>public , args: ($message, $fileName, $inner)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}