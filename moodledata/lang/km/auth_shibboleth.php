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
 * Strings for component 'auth_shibboleth', language 'km', branch 'MOODLE_36_STABLE'
 *
 * @package   auth_shibboleth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shibbolethdescription'] = 'ដោយប្រើវិធីសាស្ត្រនេះ អ្នកប្រើនឹងត្រូវបានបង្កើត និងផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវដោយប្រើ <a href="http://shibboleth.internet2.edu/">Shibboleth</a> ។<br/>សូមអាន <a href="../auth/shibboleth/README.txt">README</a> សម្រាប់ Shibboleth អំពីរបៀបរៀបចំ Moodle របស់អ្នកដោយប្រើ Shibboleth';
$string['auth_shibboleth_errormsg'] = 'សូមជ្រើសក្រុមដែលអ្នកជាសមាជិក!';
$string['auth_shibboleth_login'] = 'ការចូល Shibboleth';
$string['auth_shibboleth_login_long'] = 'ចូលក្នុង Moodle តាមរយៈ Shibboleth';
$string['auth_shibboleth_manual_login'] = 'ចូលដោយដៃ';
$string['auth_shibboleth_select_member'] = 'ខ្ញុំជាសមាជិកនៃ ...';
$string['auth_shibboleth_select_organization'] = 'ចំពោះការផ្ទៀងផ្ទាត់តាមរយៈ Shibboleth, សូមជ្រើសក្រុមរបស់អ្នកពីបញ្ជីធ្លាក់ចុះ ៖';
$string['auth_shib_changepasswordurl'] = 'URL ផ្លាស់ប្ដូរពាក្យសម្ងាត់';
$string['auth_shib_convert_data'] = 'API កំណែប្រែទិន្នន័យ';
$string['auth_shib_convert_data_description'] = 'អ្នកអាចប្រើ API នេះដើម្បីបន្តកែប្រែទិន្នន័យដែលបានផ្ដល់ដោយ Shibboleth ។ ចំពោះសេចក្ដីណែនាំបន្ថែម សូមអាន <a href="../auth/shibboleth/README.txt">README</a> ។';
$string['auth_shib_convert_data_warning'] = 'ឯកសារគឺមិនមាន ឬមិនអាចអានបានដោយដំណើរការម៉ាស៊ីនបម្រើតំបន់បណ្ដាញទេ !';
$string['auth_shib_instructions'] = 'ប្រើ <a href="{$a}">ការចូល Shibboleth</a> ដើម្បីចូលដំណើរការតាមរយៈ Shibboleth នៅពេលដែលស្ថាប័នរបស់អ្នកគាំទ្រវា ។<br />បើមិនដូច្នោះទេ ប្រើសំណុំបែបបទចូលធម្មតាដែលបង្ហាញនៅទីនេះ ។';
$string['auth_shib_instructions_help'] = 'នៅទីនេះ អ្នកគួរផ្ដល់នូវសេចក្ដីណែនាំផ្ទាល់ខ្លួនសម្រាប់អ្នកប្រើរបស់អ្នកដើម្បីពន្យល់អំពី Shibboleth ។ វានឹងត្រូវបានបង្ហាញនៅលើទំព័រចូលក្នុងផ្នែកសេចក្ដីណែនាំ ។ សេចក្ដីណែនាំត្រូវតែរួមបញ្ចូលតំណទៅ "<b>{$a}</b>" ដែលអ្នកប្រើចុច ពេលពួកគេចង់ចូល ។';
$string['auth_shib_no_organizations_warning'] = 'បើអ្នកចង់ប្រើសេវា WAYF ដែលរួមបញ្ចូល, អ្នកត្រូវតែផ្ដល់បញ្ជី Identity Provider entityIDs ដែលបំបែកដោយ, ឈ្មោះរបស់ពួកវា និងកម្មវិធីចាប់ផ្ដើមសម័យស្រេចចិត្ត ។';
$string['auth_shib_only'] = 'តែ Shibboleth ប៉ុណ្ណោះ';
$string['auth_shib_only_description'] = 'ធីកជម្រើសនេះ ប្រសិនបើការផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវ Shibboleth គួរតែត្រូវអនុវត្តនោះ';
$string['auth_shib_username_description'] = 'ឈ្មោះអថេរបរិស្ថានរបស់ម៉ាស៊ីនបម្រើបណ្ដាញ Shibboleth ដែលគួរតែប្រើជាឈ្មោះអ្នកប្រើ Moodle';
$string['pluginname'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'អ្នកហាក់ដូចជាបានផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវនឹង Shibboleth ប៉ុន្តែ Moodle មិនបានទទួលគុណលក្ខណៈអ្នកប្រើទេ ។ សូមពិនិត្យមើលថា អ្នកផ្ដល់អត្តសញ្ញាណរបស់អ្នកចេញផ្សាយនូវគុណលក្ខណៈចាំបាច់ ({$a}) ចំពោះ Moodle ផ្ដល់សេវាដែលកំពុងរត់នៅលើ ឬជូនដំណឹងដល់អ្នកគ្រប់គ្រងតំបន់បណ្ដាញនៃម៉ាស៊ីនបម្រើនេះ ។';
$string['shib_not_all_attributes_error'] = 'Moodle ត្រូវការគុណលក្ខណៈ Shibboleth ដែលមិនបានបង្ហាញនៅក្នុងករណីរបស់អ្នក ។ គុណលក្ខណៈគឺ ៖ {$a}<br />សូមទាក់ទងនឹងអ្នកគ្រប់គ្រងតំបន់បណ្ដាញនៃម៉ាស៊ីនបម្រើនេះ ឬអ្នកផ្ដល់អត្តសញ្ញាណរបស់អ្នក ។';
$string['shib_not_set_up_error'] = 'ការផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវ Shibboleth ហាក់ដូចជាមិនបានរៀបចំត្រឹមត្រូវទេ ព្រោះមិនមានអថេរបរិស្ថាន Shibboleth សម្រាប់ទំព័រនេះទេ ។ សូមមើលឯកសារ <a href="README.txt">README</a> ដើម្បីមើលសេចក្ដីណែនាំបន្ថែមអំពីរបៀបរៀបចំការជូនដំណឹង Shibboleth ឬទាក់ទងនឹងអ្នកគ្រប់គ្រងតំបន់បណ្ដាញដើម្បីសួរអំពីការដំឡើង Moodle នេះ ។';
