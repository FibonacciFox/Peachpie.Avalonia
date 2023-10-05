<?php
namespace Avalonia\OpenGL;
/**
 */
class GlContextInfo extends \System\Object
{
	/**
	 * @var \Avalonia\OpenGL\GlVersion
	 * @property
	 */
	public readonly $Version;
	/**
	 * @var \System\Collections\Generic\HashSet_1[System\String]
	 * @property
	 */
	public readonly $Extensions;
	/**
	 * @return \Avalonia\OpenGL\GlVersion
	 */
	public  function get_Version(){}
	/**
	 * @return \System\Collections\Generic\HashSet_1
	 */
	public  function get_Extensions(){}
	/**
	 * @param \Avalonia\OpenGL\GlVersion $version
	 * @param \System\Func_2 $getProcAddress
	 * @return \Avalonia\OpenGL\GlContextInfo
	 */
	public static function Create($version, $getProcAddress){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
