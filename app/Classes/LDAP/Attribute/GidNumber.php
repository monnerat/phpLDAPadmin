<?php

namespace App\Classes\LDAP\Attribute;

use App\Classes\LDAP\Attribute;

/**
 * Represents an GidNumber Attribute
 */
final class GidNumber extends Attribute
{
	protected(set) bool $no_attr_tags = FALSE;
}