<?php
namespace System\IO\Pipes;
/**
 */
class PipeAccessRule extends \System\Security\AccessControl\AccessRule
{
	/**
	 * @var \System\IO\Pipes\PipeAccessRights
	 * @property
	 */
	public readonly $PipeAccessRights;
	/**
	 * @var \System\Security\AccessControl\AccessControlType
	 * @property
	 */
	public readonly $AccessControlType;
	/**
	 * @var \System\Security\Principal\IdentityReference
	 * @property
	 */
	public readonly $IdentityReference;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInherited;
	/**
	 * @var \System\Security\AccessControl\InheritanceFlags
	 * @property
	 */
	public readonly $InheritanceFlags;
	/**
	 * @var \System\Security\AccessControl\PropagationFlags
	 * @property
	 */
	public readonly $PropagationFlags;
	/**
	 * @return \System\IO\Pipes\PipeAccessRights
	 */
	public  function get_PipeAccessRights(){}
	/**
	 * @param \System\IO\Pipes\PipeAccessRights $rights
	 * @param \System\Security\AccessControl\AccessControlType $controlType
	 * @return \System\Int32|int
	 */
	protected static function AccessMaskFromRights($rights, $controlType){}
	/**
	 * @param \System\Int32|int $accessMask
	 * @return \System\IO\Pipes\PipeAccessRights
	 */
	protected static function RightsFromAccessMask($accessMask){}
}
