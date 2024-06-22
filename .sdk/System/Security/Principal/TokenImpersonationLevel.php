<?php
namespace System\Security\Principal;
enum TokenImpersonationLevel
{

	
	case None = '0';
	case Anonymous = '1';
	case Identification = '2';
	case Impersonation = '3';
	case Delegation = '4';

}