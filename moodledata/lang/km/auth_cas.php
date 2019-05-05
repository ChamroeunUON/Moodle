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
 * Strings for component 'auth_cas', language 'km', branch 'MOODLE_36_STABLE'
 *
 * @package   auth_cas
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesCAS'] = 'អ្នកប្រើ CAS';
$string['accesNOCAS'] = 'អ្នកប្រើផ្សេងទៀត';
$string['auth_cas_auth_user_create'] = 'បង្កើតអ្នកប្រើខាងក្រៅ';
$string['auth_cas_baseuri'] = 'URI របស់ម៉ាស៊ីនបម្រើ (គ្មានអ្វីទេ ប្រសិនបើគ្មាន Uri មូលដ្ឋាន)<br />ឧទាហរណ៍ ប្រសិនបើម៉ាស៊ីនបម្រើ CAS ឆ្លើយតបទៅ host.domaine.fr/CAS/ ដូច្នេះ<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'URI មូលដ្ឋាន';
$string['auth_cas_broken_password'] = 'អ្នកមិនអាចធ្វើបន្តដោយគ្មានការផ្លាស់ប្ដូរពាក្យសម្ងាត់របស់អ្នកទេ ទោះជាគ្មានទំព័រសម្រាប់ផ្លាស់ប្ដូរវាក៏ដោយ ។ សូមទាក់ទងអ្នកគ្រប់គ្រង Moodle របស់អ្នក ។';
$string['auth_cas_cantconnect'] = 'ផ្នែក LDAP របស់ម៉ូឌុល CAS មិនអាចតភ្ជាប់ទៅម៉ាស៊ីនបម្រើ ៖ {$a}';
$string['auth_cas_casversion'] = 'កំណែ';
$string['auth_cas_changepasswordurl'] = 'URL ផ្លាស់ប្ដូរពាក្យសម្ងាត់';
$string['auth_cas_create_user'] = 'បើកវា ប្រសិនបើអ្នកចង់បញ្ចូលអ្នកប្រើដែលបានផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវដោយ CAS ទៅក្នុងមូលដ្ឋានទិន្នន័យ Moodle ។ បើមិនដូចនោះទេ គឺមានតែអ្នកប្រើដែលមានរួចនៅក្នុងមូលដ្ឋានទិន្នន័យ Moodle ប៉ុណ្ណោះដែលអាចចូលបាន ។';
$string['auth_cas_create_user_key'] = 'បង្កើតអ្នកប្រើ';
$string['auth_casdescription'] = 'វិធីសាស្ដ្រនេះប្រើម៉ាស៊ីនបម្រើ CAS (Central Authentication Service) ដើម្បីផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវនៃអ្នកប្រើនៅក្នុងបរិស្ថាន Single Sign On (SSO) ។ អ្នកក៏អាចប្រើការផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវ LDAP សាមញ្ញបានផងដែរ ។ ប្រសិនបើឈ្មោះអ្នកប្រើ និងពាក្យសម្ងាត់ដែលបានផ្ដល់ឲ្យត្រឹមត្រូវតាម CAS នោះ Moodle នឹងបង្កើតធាតុអ្នកប្រើថ្មីមួយទៀតនៅក្នុងមូលដ្ឋានទិន្នន័យរបស់វា ដោយយកគុណលក្ខណៈអ្នកប្រើពី LDAP តាមតែត្រូវការ ។ ចំពោះការចូលខាងក្រោម គឺពិនិត្យតែឈ្មោះអ្នកប្រើ និងពាក្យសម្ងាត់ប៉ុណ្ណោះ ។';
$string['auth_cas_enabled'] = 'បើកវា ប្រសិនបើអ្នកចង់ប្រើការផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវ CAS ។';
$string['auth_cas_hostname'] = 'ឈ្មោះម៉ាស៊ីនរបស់ម៉ាស៊ីនបម្រើ CAS <br />ឧ ៖ host.domain.fr';
$string['auth_cas_hostname_key'] = 'ឈ្មោះម៉ាស៊ីន';
$string['auth_cas_invalidcaslogin'] = 'សូមអភ័យទោស ការចូលរបស់អ្នកបានបរាជ័យ ដូច្នេះអ្នកមិនត្រូវបានអនុញ្ញាតឡើយ';
$string['auth_cas_language'] = 'ភាសាដែលបានជ្រើស';
$string['auth_cas_language_key'] = 'ភាសា';
$string['auth_cas_logincas'] = 'ការចូលដំណើរការការតភ្ជាប់សុវត្ថិភាព';
$string['auth_cas_logoutcas'] = 'ប្ដូរវាទៅជា \'បាទ/ចាស\'\' បើអ្នកចង់ចេញពី CAS ពេលអ្នកផ្ដាច់ពី Moodle';
$string['auth_cas_logoutcas_key'] = 'ចេញ CAS';
$string['auth_cas_multiauth'] = 'ប្ដូរវាទៅជា \'បាទ/ចាស\'\' បើអ្នកចង់មានការផ្ទៀងផ្ទាត់ច្រើន (CAS + ការផ្ទៀងផ្ទាត់ផ្សេងទៀត)';
$string['auth_cas_multiauth_key'] = 'ការផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវច្រើន';
$string['auth_casnotinstalled'] = 'មិនអាចប្រើការផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវ CAS បានទេ ។ មិនបានដំឡើងម៉ូឌុល LDAP របស់ PHP ទេ ។';
$string['auth_cas_port'] = 'ច្រករបស់ម៉ាស៊ីនបម្រើ CAS';
$string['auth_cas_port_key'] = 'ច្រក';
$string['auth_cas_proxycas'] = 'ប្ដូរវាទៅជា \'បាទ/ចាស\'\' បើអ្នកប្រើរបៀបប្រូកស៊ី CASin';
$string['auth_cas_proxycas_key'] = '"របៀបប្រូកស៊ី';
$string['auth_cas_server_settings'] = 'ការកំណត់រចនាសម្ព័ន្ធម៉ាស៊ីនបម្រើ CAS';
$string['auth_cas_text'] = 'ការតភ្ជាប់ដែលមានសុវត្ថិភាព';
$string['auth_cas_use_cas'] = 'ប្រើ CAS';
$string['auth_cas_version'] = 'កំណែនៃ CAS';
$string['CASform'] = 'ជម្រើសផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវ';
$string['pluginname'] = 'ម៉ាស៊ីនបម្រើ CAS (SSO)';
