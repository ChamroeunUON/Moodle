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
 * Strings for component 'enrol_ldap', language 'km', branch 'MOODLE_36_STABLE'
 *
 * @package   enrol_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'វគ្គសិក្សាអាចត្រូវបានបង្កើតដោយស្វ័យប្រវត្តិ នៅពេលដែលមានការចុះឈ្មោះសម្រាប់វគ្គសិក្សាដែលមិនទាន់មាននៅក្នុង Moodle ។';
$string['autocreation_settings'] = 'កំណត់ការបង្កើតវគ្គសិក្សាដោយស្វ័យប្រវត្តិ';
$string['bind_dn'] = 'បើអ្នកចង់ប្រើ bind-user ដើម្បីស្វែងរកអ្នកប្រើ
សូមបញ្ជាក់វានៅទីនេះ ។ ប្រហែលជា
\'cn=ldapuser,ou=public,o=org\'';
$string['bind_pw'] = 'ពាក្យសម្ងាត់សម្រាប់អ្នកប្រើ bind-user ។';
$string['bind_pw_key'] = 'ពាក្យសម្ងាត់';
$string['category'] = 'ប្រភេទសម្រាប់វគ្គសិក្សាដែលបានបង្កើតដោយស្វ័យប្រវត្តិ ។';
$string['contexts'] = 'បរិបទ LDAP';
$string['course_fullname'] = 'មិនទាមទារ ៖ ប្រអប់ទិន្នន័យ LDAP ដែលត្រូវយកឈ្មោះពេញចេញពី ។';
$string['course_idnumber'] = 'ផ្គូផ្គងទៅកម្មវិធីកំណត់អត្តសញ្ញាណមានតែមួយនៅក្នុង LDAP ជាទូទៅ <em>cn</em> ឬ <em>uid</em> ។ វាត្រូវបានផ្ដល់អនុសាសន៍ឲ្យចាក់សោតម្លៃ ប្រសិនបើអ្នកកំពុងប្រើការបង្កើតវគ្គសិក្សាដោយស្វ័យប្រវត្តិ ។';
$string['course_settings'] = 'កំណត់ការចុះឈ្មោះវគ្គសិក្សា';
$string['course_shortname'] = 'មិនទាមទារ ៖ ប្រអប់ទិន្នន័យ LDAP ដែលត្រូវយកឈ្មោះខ្លីចេញពី ។';
$string['course_summary'] = 'មិនទាមទារ ៖ ប្រអប់ទិន្នន័យ LDAP ដែលត្រូវយកសេចក្តីសង្ខេបចេញពី ។';
$string['editlock'] = 'ចាក់សោតម្លៃ';
$string['enrolname'] = 'LDAP';
$string['general_options'] = 'ជម្រើសទូទៅ';
$string['host_url'] = 'បញ្ជាក់ម៉ាស៊ីន LDAP ក្នុងទម្រង់ជា URL
ដូចជា \'ldap://ldap.myorg.com/\'
ឬ \'ldaps://ldap.myorg.com/\'';
$string['memberattribute'] = 'គុណលក្ខណៈសមាជិក LDAP';
$string['objectclass'] = 'objectClass ដែលបានប្រើដើម្បីស្វែងរកវគ្គសិក្សា ។ ជាទូទៅ \'posixGroup\' ។';
$string['pluginname_desc'] = '<p>អ្នកអាចប្រើម៉ាស៊ីនបម្រើ LDPA ដើម្បីត្រួតពិនិត្យការចុះឈ្មោះរបស់អ្នក ។
វាត្រូវបានសន្មត់មែកធាង LDAP របស់អ្នកដែលមានក្រុមដែលផ្គូផ្គងនឹងវគ្គសិក្សា ហើយក្រុម/វគ្គសិក្សាទាំងនោះនីមួយៗ នឹងមានធាតុសមាជិក ដើម្បីផ្គូផ្គងទៅនឹងសិស្ស ។</p>
<p>វាត្រូវបានសន្មត់ថា វគ្គសិក្សាគឺត្រូវបានកំណត់ជាក្រុមនៅក្នុង LDAP ដោយក្រុមនីមួយៗមានប្រអប់ទិន្នន័យសមាជិកភាពច្រើន (<em>member</em> ឬ <em>memberUid</em>) ដែលមានការកំណត់អត្តសញ្ញាណរបស់អ្នកប្រើតែមួយគត់ ។</p>
<p>ដើម្បីប្រើការចុះឈ្មោះ LDAP អ្នកប្រើរបស់អ្នក<strong>ត្រូវតែ</strong>មានវាលលេខសម្គាល់ត្រឹមត្រូវ ។ ក្រុម LDAP ត្រូវតែមានលេខសម្គាល់នោះនៅក្នុងវាលសមាជិកភាពសម្រាប់អ្នកប្រើចុះឈ្មោះនៅក្នុងវគ្គសិក្សា ។
ជាទូទៅ វានឹងធ្វើការបានល្អ នៅពេលដែលអ្នកបានប្រើការផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវ LDAP រួចហើយ ។</p>
<p>ការចុះឈ្មោះនឹងត្រូវបានធ្វើឲ្យទាន់សម័យនៅពេលដែលអ្នកប្រើចូល ។ អ្នកក៏អាចរត់ស្គ្រីបដើម្បីរក្សាការចុះឈ្មោះក្នុងការធ្វើសមកាលកម្ម ។ សូមមើលនៅក្នុង <em>enrol/ldap/enrol_ldap_sync.php</em> ។</p>
<p>កម្មវិធីជំនួយនេះក៏អាចត្រូវបានកំណត់ដើម្បីឲ្យបង្កើតវគ្គសិក្សាថ្មីដោយស្វ័យប្រវត្តិ នៅពេលដែលក្រុមថ្មីបង្ហាញនៅក្នុង LDAP ។</p>';
$string['roles'] = 'ការផ្គូផ្គងតួនាទី';
$string['server_settings'] = 'ការកំណត់ម៉ាស៊ីនបម្រើ LDAP';
$string['template'] = 'ជាជម្រើស ៖ វគ្គសិក្សាដែលបានបង្កើតដោយស្វ័យប្រវត្តិអាចចម្លងការកំណត់របស់ពួកគេពីវគ្គសិក្សាពុម្ព ។';
$string['updatelocal'] = 'ធ្វើឲ្យទិន្នន័យមូលដ្ឋានទាន់សម័យ';
$string['version'] = 'កំណែពិធីការ LDAP ដែលម៉ាស៊ីនបម្រើរបស់អ្នកកំពុងប្រើ ។';
