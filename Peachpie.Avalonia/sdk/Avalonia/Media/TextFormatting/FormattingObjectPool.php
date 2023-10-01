<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class FormattingObjectPool extends \System\Object
{
	/**
	 * @return \Avalonia\Media\TextFormatting\FormattingObjectPool
	 */
	public static function get_Instance(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\ListPool_1
	 */
	public  function get_TextRunLists(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\ListPool_1
	 */
	public  function get_UnshapedTextRunLists(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\ListPool_1
	 */
	public  function get_TextLines(){}
	/**
	 * @return \System\Void|void
	 */
	public  function VerifyAllReturned(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
