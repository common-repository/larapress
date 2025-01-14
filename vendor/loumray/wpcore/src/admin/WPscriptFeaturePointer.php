<?php
/*
 * This file is part of WPCore project.
 *
 * (c) Louis-Michel Raynauld <louismichel@pweb.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WPLaravelBoostrap\WPCore\admin;

use WPLaravelBoostrap\WPCore\WPscriptAdmin;

/**
 * WP script Feature Pointer
 *
 * @author Louis-Michel Raynauld <louismichel@pweb.ca>
 */
class WPscriptFeaturePointer extends WPscriptAdmin
{
    public function __construct($handle, $src, $debugsrc)
    {
        parent::__construct(array(), $handle, $src, $debugsrc, array('jquery','wp-pointer'), false, true);
    }
}
