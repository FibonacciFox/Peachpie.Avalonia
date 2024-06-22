<?php
namespace System\Security\Principal;
enum PrincipalPolicy
{

	
	case UnauthenticatedPrincipal = '0';
	case NoPrincipal = '1';
	case WindowsPrincipal = '2';

}