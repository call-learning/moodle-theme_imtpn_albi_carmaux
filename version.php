<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme plugin version definition.
 *
 * Subtheme for IMT Atlantique
 *
 * @package   theme_imtpn_albi_carmaux
 * @copyright 2020 - CALL Learning - Laurent David <laurent@call-learning.fr>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2023080800; /* This is the version number to increment when changes needing an update are made */
$plugin->requires  = 2022112804;
$plugin->release   = '4.1.1';
$plugin->maturity  = MATURITY_STABLE;
$plugin->component = 'theme_imtpn_albi_carmaux';
$plugin->dependencies = [
    'theme_imtpn' => ANY_VERSION,
];
