<?php
namespace System\IO;
/**
 */
class EnumerationOptions extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $RecurseSubdirectories;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IgnoreInaccessible;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $BufferSize;
	/**
	 * @var \System\IO\FileAttributes
	 * @property
	 */
	public $AttributesToSkip;
	/**
	 * @var \System\IO\MatchType
	 * @property
	 */
	public $MatchType;
	/**
	 * @var \System\IO\MatchCasing
	 * @property
	 */
	public $MatchCasing;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $MaxRecursionDepth;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $ReturnSpecialDirectories;
	/**
	 * @return \System\IO\EnumerationOptions
	 */
	protected static function get_Compatible(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_CompatibleRecursive(){}
	/**
	 * @return \System\IO\EnumerationOptions
	 */
	protected static function get_Default(){}
	/**
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\IO\EnumerationOptions
	 */
	protected static function FromSearchOption($searchOption){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_RecurseSubdirectories(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_RecurseSubdirectories($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IgnoreInaccessible(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IgnoreInaccessible($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BufferSize(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_BufferSize($value){}
	/**
	 * @return \System\IO\FileAttributes
	 */
	public  function get_AttributesToSkip(){}
	/**
	 * @param \System\IO\FileAttributes $value
	 * @return \System\Void|void
	 */
	public  function set_AttributesToSkip($value){}
	/**
	 * @return \System\IO\MatchType
	 */
	public  function get_MatchType(){}
	/**
	 * @param \System\IO\MatchType $value
	 * @return \System\Void|void
	 */
	public  function set_MatchType($value){}
	/**
	 * @return \System\IO\MatchCasing
	 */
	public  function get_MatchCasing(){}
	/**
	 * @param \System\IO\MatchCasing $value
	 * @return \System\Void|void
	 */
	public  function set_MatchCasing($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaxRecursionDepth(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_MaxRecursionDepth($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_ReturnSpecialDirectories(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_ReturnSpecialDirectories($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
