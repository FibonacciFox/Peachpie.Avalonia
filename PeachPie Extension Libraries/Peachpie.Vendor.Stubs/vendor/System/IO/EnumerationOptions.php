<?php
namespace System\IO;
class EnumerationOptions extends \System\Object
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $RecurseSubdirectories;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IgnoreInaccessible;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $BufferSize;
	/**
	 * @property
	 * @var \System\IO\FileAttributes
	 */
	public $AttributesToSkip;
	/**
	 * @property
	 * @var \System\IO\MatchType
	 */
	public $MatchType;
	/**
	 * @property
	 * @var \System\IO\MatchCasing
	 */
	public $MatchCasing;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $MaxRecursionDepth;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ReturnSpecialDirectories;
	/**
	 * @param \System\IO\SearchOption $searchOption
	 * @return \System\IO\EnumerationOptions
	 */
	protected static function FromSearchOption($searchOption){}
	/**
	 */
	public function __construct(){}
}