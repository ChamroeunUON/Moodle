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
 * Strings for component 'auth_ldap', language 'km', branch 'MOODLE_36_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'មិនអាចបង្កើតគណនីថ្មីក្នុងថតសកម្មបានទេ ។ សូមប្រាកដថា អ្នកបំពេញតម្រូវការទាំងអស់ដើម្បីអាចធ្វើការ (ការតភ្ជាប់ LDAPS ចងអ្នកប្រើដែលមានសិទ្ធិគ្រប់គ្រាន់ ។ល។)';
$string['auth_ldap_attrcreators'] = 'បញ្ជីក្រុម ឬបរិបទដែលសមាជិករបស់វាត្រូវបានអនុញ្ញាតឲ្យបង្កើតគុណលក្ខណៈ ។ បំបែកក្រុមច្រើនដោយ';
$string['auth_ldap_attrcreators_key'] = 'អ្នកបង្កើតគុណលក្ខណៈ';
$string['auth_ldap_auth_user_create_key'] = 'បង្កើតអ្នកប្រើខាងក្រៅ';
$string['auth_ldap_bind_dn'] = 'ប្រសិនបើអ្នកចង់ប្រើអ្នកប្រើចងដើម្បីស្វែងរកអ្នកប្រើ សូមបញ្ជាក់នៅទីនេះ ។ គឺដូចជា \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'បានសម្គាល់ឈ្មោះ';
$string['auth_ldap_bind_pw'] = 'ពាក្យសម្ងាត់សម្រាប់អ្នកប្រើចង ។';
$string['auth_ldap_bind_pw_key'] = 'ពាក្យសម្ងាត់';
$string['auth_ldap_bind_settings'] = 'ការកំណត់ការចង';
$string['auth_ldap_changepasswordurl_key'] = 'URL ផ្លាស់ប្ដូរពាក្យសម្ងាត់';
$string['auth_ldap_contexts'] = 'បញ្ជីបរិបទដែលអ្នកប្រើស្ថិតនៅ ។ សូមបំបែកបរិបទផ្សេងគ្នាដោយប្រើសញ្ញា';
$string['auth_ldap_contexts_key'] = 'បរិបទ';
$string['auth_ldap_create_context'] = 'ប្រសិនបើអ្នកបើកការបង្កើតអ្នកប្រើដោយមានការអះអាងអ៊ីមែល គឺត្រូវបញ្ជាក់បរិបទដែលបង្កើតអ្នកប្រើ ។ បរិបទនេះគួរតែខុសពីអ្នកប្រើផ្សេងទៀត ដើម្បីការពារបញ្ហាសុវត្ថិភាព ។ អ្នកមិនចាំបាច់បន្ថែមបរិបទនេះទៅ ldap_context-variable ទេ Moodle នឹងស្វែងរកអ្នកប្រើពីបរិបទនេះដោយស្វ័យប្រវត្តិ ។<br /><b>ចំណាំ !</b> អ្នកត្រូវតែកែប្រែវិធីសាស្ត្រ user_create() ក្នុងឯកសារ auth/ldap/auth.php ដើម្បីធ្វើឲ្យការបង្កើតអ្នកប្រើដំណើរការ';
$string['auth_ldap_create_context_key'] = 'បរិបទសម្រាប់អ្នកប្រើថ្មី';
$string['auth_ldap_create_error'] = 'កំហុសក្នុងការបង្កើតអ្នកប្រើនៅក្នុង LDAP ។';
$string['auth_ldap_creators'] = 'បញ្ជីក្រុមរបស់សមាជិកត្រូវបានអនុញ្ញាតឲ្យបង្កើតវគ្គសិក្សាថ្មី ។ បំបែកក្រុមច្រើនដោយសញ្ញា';
$string['auth_ldap_creators_key'] = 'អ្នកបង្កើត';
$string['auth_ldapdescription'] = 'វិធីសាស្ត្រនេះផ្ដល់នូវការផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវនឹងម៉ាស៊ីនបម្រើ LDAP ខាងក្រៅ ។

ប្រសិនបើឈ្មោះអ្នកប្រើ និងពាក្យសម្ងាត់ដែលផ្ដល់ត្រឹមត្រូវ នោះ Moodle នឹងបង្កើតធាតុអ្នកប្រើថ្មីក្នុងមូលដ្ឋានទិន្នន័យរបស់វា ។ Moodle នេះអាចអានគុណលក្ខណៈអ្នកប្រើពី LDAP និងបំពេញប្រអប់ទិន្នន័យដែលត្រូវការក្នុង Moodle ជាមុន ។ ចំពោះការចូលខាងក្រោម គឺត្រួតពិនិត្យតែឈ្មោះអ្នកប្រើ និងពាក្យសម្ងាត់ប៉ុណ្ណោះ ។';
$string['auth_ldap_expiration_desc'] = 'ជ្រើស ទេ ដើម្បីបិទការពិនិត្យពាក្យសម្ងាត់ដែលផុតកំណត់ ឬ LDAP ដើម្បីអានពេលវេលាផុតកំណត់របស់ពាក្យសម្ងាត់ដោយផ្ទាល់ពី LDAP';
$string['auth_ldap_expiration_key'] = 'ការផុតកំណត់';
$string['auth_ldap_expiration_warning_desc'] = 'ចំនួនថ្ងៃមុនពេលចេញផ្សាយការព្រមាននៃការផុតកំណត់ពាក្យសម្ងាត់ ។';
$string['auth_ldap_expiration_warning_key'] = 'ការព្រមានការផុតកំណត់';
$string['auth_ldap_expireattr_desc'] = 'ស្រេចចិត្ត ៖ បដិសេធ ldap-attribute ដែលរក្សាទុកពេលវេលាផុតកំណត់របស់ពាក្យសម្ងាត់';
$string['auth_ldap_expireattr_key'] = 'គុណលក្ខណៈការផុតកំណត់';
$string['auth_ldapextrafields'] = 'ប្រអប់ទិន្នន័យទាំងនេះគឺមិនទាមទារទេ ។ អ្នកអាចជ្រើសបំពេញប្រអប់ទិន្នន័យអ្នកប្រើ Moodle ជាមុន ដោយព័ត៌មានពី <b>ប្រអប់ទិន្នន័យ LDAP</b> ដែលអ្នកបញ្ជាក់នៅទីនេះ ។ <p>ប្រសិនបើអ្នកទុកប្រអប់ទិន្នន័យទាំងនេះឲ្យនៅទទេ ដូច្នេះគ្មានអ្វីដែលត្រូវផ្ទេរពី LDAP ទេ ហើយលំនាំដើមរបស់ Moodle នឹងត្រូវបានប្រើជំនួសវិញ ។</p><p>ក្នុងករណីណាក៏ដោយ អ្នកប្រើនឹងអាចកែសម្រួលប្រអប់ទិន្នន័យទាំងអស់នេះបាន បន្ទាប់ពីពួកគេចូល ។</p>';
$string['auth_ldap_graceattr_desc'] = 'ស្រេចចិត្ត ៖ បដិសេធគុណលក្ខណៈ gracelogin';
$string['auth_ldap_gracelogin_key'] = 'គុណលក្ខណៈនៃការចូល Grace';
$string['auth_ldap_gracelogins_desc'] = 'បើកការគាំទ្រ gracelogin នៃ LDAP ។ បន្ទាប់ពីពាក្យសម្ងាត់បានផុតកំណត់ អ្នកប្រើអាចចូលបានរហូតទាល់តែចំនួន gracelogin ស្មើ ០ ។ ការបើកការកំណត់នេះបង្ហាញពីសារចូល grace នៅពេលដែលពាក្យសម្ងាត់ត្រូវបានផុតកំណត់ ។';
$string['auth_ldap_gracelogins_key'] = 'ការចូល Grace';
$string['auth_ldap_groupecreators'] = 'បញ្ជីក្រុម ឬបរិបទដែលសមាជិករបស់វាត្រូវបានអនុញ្ញាតឲ្យបង្កើតក្រុម ។ បំបែកក្រុមច្រើនដោយប្រើ';
$string['auth_ldap_groupecreators_key'] = 'អ្នកបង្កើតក្រុម';
$string['auth_ldap_host_url'] = 'បញ្ជាក់ម៉ាស៊ីន LDAP ក្នុងសំណុំបែបបទ URL ដូចជា \'ldap://ldap.myorg.com/\' ឬ \'ldaps://ldap.myorg.com/\' បំបែកម៉ាស៊ីនបម្រើច្រើនដោយប្រើ';
$string['auth_ldap_host_url_key'] = 'URL ម៉ាស៊ីន';
$string['auth_ldap_ldap_encoding'] = 'បញ្ជាក់ការអ៊ីនកូដដែលបានប្រើដោយម៉ាស៊ីនបម្រើ LDAP ។ ភាគច្រើន utf-8 MS AD v2 ប្រើការអ៊ីនកូដវេទិកាលំនាំដើមដូចជា cp1252, cp1250 ។ល។';
$string['auth_ldap_ldap_encoding_key'] = 'ការអ៊ីនកូដ LDAP';
$string['auth_ldap_login_settings'] = 'ការកំណត់ការចូល';
$string['auth_ldap_memberattribute'] = 'ស្រេចចិត្ត ៖ បដិសេធគុណលក្ខណៈសមាជិកអ្នកប្រើ នៅពេលអ្នកប្រើជាកម្មសិទ្ធិរបស់ក្រុម ។ ជាទូទៅ \'សមាជិក\'';
$string['auth_ldap_memberattribute_isdn'] = 'ស្រេចចិត្ត ៖ បដិសេធការគ្រប់គ្រងតម្លៃគុណលក្ខណៈសមាជិក ០ ឬ ១ ក៏បាន';
$string['auth_ldap_memberattribute_isdn_key'] = 'គុណលក្ខណៈសមាជិកប្រើ dn';
$string['auth_ldap_memberattribute_key'] = 'គុណលក្ខណៈសមាជិក';
$string['auth_ldap_noconnect'] = 'ម៉ូឌុល LDAP មិនអាចតភ្ជាប់ទៅម៉ាស៊ីនបម្រើ ៖ {$a}';
$string['auth_ldap_noconnect_all'] = 'ម៉ូឌុល LDAP មិនអាចតភ្ជាប់ទៅម៉ាស៊ីនបម្រើ ៖ {$a}';
$string['auth_ldap_noextension'] = 'ព្រមាន ៖ ម៉ូឌុល LDAP របស់ PHP ហាក់ដូចជាមិនមាន ។ សូមប្រាកដថា វាត្រូវបានដំឡើង និងបានបើក ។';
$string['auth_ldap_no_mbstring'] = 'អ្នកត្រូវការផ្នែកបន្ថែម mbstring ដើម្បីបង្កើតអ្នកប្រើក្នុងថតសកម្ម ។';
$string['auth_ldapnotinstalled'] = 'មិនអាចប្រើការផ្ទៀងផ្ទាត់ភាពត្រឹមត្រូវ LDAP បានទេ ។ មិនបានដំឡើងម៉ូឌុល LDAP របស់ PHP ទេ ។';
$string['auth_ldap_objectclass'] = 'ស្រេចចិត្ត ៖ សរសេរជាន់លើ objectClass ដែលបានប្រើដើម្បីដាក់ឈ្មោះ/ស្វែងរកលើ ldap_user_type ។ ជាទូទៅអ្នកមិនចាំបាច់ផ្លាស់ប្ដូរវាទេ ។';
$string['auth_ldap_objectclass_key'] = 'ថ្នាក់វត្ថុ';
$string['auth_ldap_opt_deref'] = 'កំណត់របៀបគ្រប់គ្រងឈ្មោះក្លែងក្លាយនៅកំឡុងពេលស្វែងរក ។ ជ្រើសតម្លៃមួយខាងក្រោម ៖ "ទេ" (LDAP_DEREF_NEVER) ឬ "បាទ/ចាស" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'ឈ្មោះក្លែងក្លាយខុសគ្នា';
$string['auth_ldap_passtype'] = 'បញ្ជាក់ទ្រង់ទ្រាយពាក្យសម្ងាត់ថ្មី ឬពាក្យសម្ងាត់ដែលបានផ្លាស់ប្ដូរក្នុងម៉ាស៊ីនបម្រើ LDAP ។';
$string['auth_ldap_passtype_key'] = 'ទ្រង់ទ្រាយពាក្យសម្ងាត់';
$string['auth_ldap_passwdexpire_settings'] = 'ការកំណត់ការផុតកំណត់នៃពាក្យសម្ងាត់ LDAP ។';
$string['auth_ldap_preventpassindb'] = 'ជ្រើស បាទ/ចាស ដើម្បីការពារពាក្យសម្ងាត់ពីការរក្សាទុកក្នុងមូលដ្ឋានទិន្នន័យរបស់ Moodle ។';
$string['auth_ldap_preventpassindb_key'] = 'លាក់ពាក្យសម្ងាត់';
$string['auth_ldap_search_sub'] = 'ស្វែងរកអ្នកប្រើពីបរិបទរង ។';
$string['auth_ldap_search_sub_key'] = 'ស្វែងរកបរិបទរង';
$string['auth_ldap_server_settings'] = 'ការកំណត់ម៉ាស៊ីនបម្រើ LDAP';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() មិនគាំទ្រប្រភេទអ្នកប្រើដែលបានជ្រើស ៖ {$a} (..នៅឡើយ)';
$string['auth_ldap_update_userinfo'] = 'ធ្វើឲ្យព័ត៌មានអ្នកប្រើទាន់សម័យ (នាមខ្លួន នាមត្រកូល អាសយដ្ឋាន..) ពី LDAP ទៅ Moodle ។ បញ្ជាក់ការកំណត់ "ការផ្គូផ្គងទិន្នន័យ" ដែលអ្នកត្រូវការ ។';
$string['auth_ldap_user_attribute'] = 'ស្រេចចិត្ត ៖ បដិសេធគុណលក្ខណៈដែលបានប្រើដើម្បីដាក់ឈ្មោះ/ស្វែងរកអ្នកប្រើ ។ ជាទូទៅ \'cn\' ។';
$string['auth_ldap_user_attribute_key'] = 'គុណលក្ខណៈអ្នកប្រើ';
$string['auth_ldap_user_exists'] = 'មានឈ្មោះអ្នកប្រើ LDAP រួចហើយ ។';
$string['auth_ldap_user_settings'] = 'ការកំណត់ការរកមើលអ្នកប្រើ';
$string['auth_ldap_user_type'] = 'ជ្រើសរបៀបរក្សាទុកអ្នកប្រើនៅក្នុង LDAP ។ ការកំណត់ក៏បញ្ជាក់អំពីរបៀបផុតកំណត់នៃការចូលផងដែរ ការចូល grace និងការបង្កើតអ្នកប្រើនឹងដំណើរការ ។';
$string['auth_ldap_user_type_key'] = 'ប្រភេទអ្នកប្រើ';
$string['auth_ldap_usertypeundefined'] = 'config.user_type មិនបានកំណត់ ឬមុខងារ ldap_expirationtime2unix មិនគាំទ្រប្រភេទដែលជ្រើស !';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type មិនបានកំណត់ ឬមុខងារ ldap_unixi2expirationtime មិនគាំទ្រប្រភេទដែលបានជ្រើស !';
$string['auth_ldap_version'] = 'កំណែពិធីការ LDAP ដែលម៉ាស៊ីនបម្រើរបស់អ្នកកំពុងប្រើ ។';
$string['auth_ldap_version_key'] = 'កំណែ';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'កំណត់ជា បាទ/ចាស ដើម្បីព្យាយាម ការចាប់ផ្ដើមតែមួយ ជាមួយដែន NTLM ។ <strong>ចំណាំ ៖</strong> នេះទាមទារការដំឡើងបន្ថែមនៅលើម៉ាស៊ីនបម្រើតំបន់បណ្ដាញដើម្បីឲ្យវាធ្វើការ សូមមើល <a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'អនុញ្ញាត';
$string['auth_ntlmsso_subnet'] = 'បើកំណត់ វានឹងព្យាយាម SSO ជាមួយម៉ាស៊ីនភ្ញៀវក្នុង subnet នេះ ។ ទ្រង់ទ្រាយ ៖ xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = 'Subnet';
$string['noemail'] = 'បានផ្ញើអ៊ីមែលទៅអ្នកដែរ ប៉ុន្តែបរាជ័យ !';
$string['ntlmsso_attempting'] = 'កំពុងព្យាយាម ការចាប់ផ្ដើមតែមួយ តាមរយៈ NTLM...';
$string['ntlmsso_failed'] = 'ការចូលស្វ័យប្រវត្តិបរាជ័យ សាកល្បងទំព័រចូលធម្មតា...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO ត្រូវបានបិទ ។';
$string['pluginname'] = 'ម៉ាស៊ីនបម្រើ LDAP';
