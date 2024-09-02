<?php
namespace System\Collections\Generic;
enum InsertionBehavior
{
	
	case None = '0';
	case OverwriteExisting = '1';
	case ThrowOnExisting = '2';

}