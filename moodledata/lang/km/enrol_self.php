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
 * Strings for component 'enrol_self', language 'km', branch 'MOODLE_36_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'ការចូលរៀនត្រូវបានបិទ ឬអសកម្ម';
$string['canntenrolearly'] = 'អ្នកមិនអាចចូលរៀននៅឡើយទេ។ ការចូលរៀននឹងចាប់ផ្តើមនៅ {$a}។';
$string['canntenrollate'] = 'អ្នកមិនអាចចូលរៀនទៀតទេ។ ការចូលរៀនបានបញ្ចប់នៅ {$a}។';
$string['customwelcomemessage'] = 'សារស្វាគមន៍តាមបំណង';
$string['customwelcomemessage_help'] = 'សារស្វាគមន៍តាមបំណងអាចត្រូវបានបន្ថែមជាអត្ថបទធម្មតា ឬក្នុងទ្រង់ទ្រាយ Moodle ស្វ័យប្រវត្តិ ដែលរួមមានស្លាក HTML និងស្លាកពហុភាសា។

អ្នកអាចដាក់បញ្ចូលកូដខាងក្រោមក្នុងសាររបស់អ្នក៖

* ឈ្មោះវគ្គសិក្សា {$a->coursename}
* តំណទៅកាន់ទំព័រប្រវត្តិរូបរបស់អ្នកប្រើ {$a->profileurl}
* អ៊ីមែលរបស់អ្នកប្រើ {$a->email}
* ឈ្មោះពេញរបស់អ្នកប្រើ {$a->fullname}';
$string['defaultrole'] = 'ការផ្តល់តួនាទីលំនាំដើម';
$string['defaultrole_desc'] = 'ជ្រើសតួនាទីដែលនឹងត្រូវបានផ្តល់ឲ្យទៅអ្នកប្រើនៅពេលគេចុះឈ្មោះចូលរៀនដោយខ្លួនឯង';
$string['enrolenddate'] = 'កាលបរិច្ឆេទបញ្ចប់';
$string['enrolenddate_help'] = 'ប្រសិនជាបើក នោះអ្នកប្រើអាចចុះឈ្មោះខ្លួនឯងបានត្រឹមតែដល់ថ្ងៃនេះប៉ុណ្ណោះ។';
$string['enrolenddaterror'] = 'កាលបរិច្ឆេទបញ្ចប់ការចុះឈ្មោះ មិនអាចនៅមុនកាលបរិច្ឆេទចាប់ផ្ដើមបានឡើយ';
$string['enrolme'] = 'ចុះឈ្មោះខ្ញុំ';
$string['enrolperiod'] = 'ថិរវេលាសម្រាប់ការចូលរៀន';
$string['enrolperiod_desc'] = 'រយៈពេលលំនាំដើមដែលសិស្សអាចចូលរៀនបាន។ ប្រសិនបើដាក់ 0 នោះរយៈពេលចូលរៀននឹងគ្មានកំណត់។';
$string['enrolperiod_help'] = 'រយៈពេលដែលសិស្សអាចចូលរៀនបាន ដោយរាប់ចាប់ពីខណៈពេលដែលគាត់បានចុះឈ្មោះចូលរៀន។ ប្រសិនជាបិទ នោះរយៈពេលចូលរៀននឹងមិនកំណត់។';
$string['enrolstartdate'] = 'កាលបរិច្ឆេទចាប់ផ្ដើម';
$string['enrolstartdate_help'] = 'ប្រសិនជាបើក នោះអ្នកប្រើអាចចុះឈ្មោះខ្លួនឯងបានចាប់ពីថ្ងៃនេះប៉ុណ្ណោះ។';
$string['expiredaction'] = 'សកម្មភាពពេលការចូលរៀនផុតកំណត់';
$string['expiredaction_help'] = 'ជ្រើសសកម្មភាពដែលត្រូវកើតឡើងនៅពេលការចូលរៀនរបស់អ្នកប្រើផុតកំណត់។ សូមចំណាំថាទិន្នន័យនិងការកំណត់មួយចំនួនរបស់អ្នកប្រើនឹងត្រូវលុបបំបាត់ពីវគ្គសិក្សានៅពេលលុបឈ្មោះចេញពីវគ្គសិក្សា។';
$string['expirymessageenrolledbody'] = 'សួស្តី {$a->user},

នេះគឺជាការជូនដំណឹងថាការចូលរៀនរបស់អ្នកនៅក្នុងវគ្គសិក្សា \'{$a-> course}\' នឹងផុតកំណត់នៅ {$ a-> timeend} ។

ប្រសិនបើអ្នកត្រូវការជំនួយ សូមទាក់ទង  {$a->enroller} ។';
$string['expirymessageenrolledsubject'] = 'ការជូនដំណឹងពីការផុតកំណត់នៃការចូលរៀនដោយខ្លួនឯង';
$string['expirymessageenrollerbody'] = 'ការចូលរៀនដោយខ្លួនឯងនៅក្នុងវគ្គសិក្សា \'{$a->course}\' នឹងផុតកំណត់ក្នុងពេល {$a->threshold} ទៀតសម្រាប់អ្នកប្រើខាងក្រោម៖

{$a->users}

ដើម្បីពន្យារពេលការចូលរៀនរបស់ពួកគេ សូមទៅកាន់ {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'ការជូនដំណឹងពីការផុតកំណត់នៃការចូលរៀនដោយខ្លួនឯង';
$string['expirynotifyall'] = 'អ្នកចុះឈ្មោះ និងអ្នកត្រូវបានចុះឈ្មោះ';
$string['expirynotifyenroller'] = 'តែអ្នកចុះឈ្មោះ';
$string['groupkey'] = 'ប្រើកូនសោសម្រាប់ការចុះឈ្មោះក្នុងក្រុម';
$string['groupkey_desc'] = 'ប្រើកូនសោសម្រាប់ការចុះឈ្មោះក្នុងក្រុមជាលំនាំដើម។';
$string['keyholder'] = 'អ្នកគួរតែបានទទួលកូនសោសម្រាប់ចូលរៀននេះពី៖';
$string['longtimenosee'] = 'លុបឈ្មោះអ្នកអសកម្មបន្ទាប់ពី';
$string['longtimenosee_help'] = 'ប្រសិនបើអ្នកប្រើមិនបានចូលក្នុងវគ្គសិក្សាក្នុងពេលដ៏យូរមួយ នោះគេនឹងត្រូវបានលុបឈ្មោះដោយស្វ័យប្រវត្តិពីវគ្គសិក្សា។ ប៉ារ៉ាមែត្រនេះកំណត់ពីពេលកំណត់នោះ។';
$string['maxenrolled'] = 'អ្នកចូលរៀនអតិបរមា';
$string['maxenrolled_help'] = 'បញ្ជាក់ពីចំនួនអ្នកប្រើអតិបរមាដែលអាចចុះឈ្មោះខ្លួនឯងបាន។ 0 មានន័យថាគ្មានកំណត់។';
$string['maxenrolledreached'] = 'ចំនួនអ្នកចុះឈ្មោះចូលរៀនដោយខ្លួនឯងបានដល់កំណត់អតិបរមាហើយ។';
$string['messageprovider:expiry_notification'] = 'ការជូនដំណឹងពីការផុតកំណត់នៃការចូលរៀនដោយខ្លួនឯង';
$string['newenrols'] = 'អនុញ្ញាតការចូលរៀនថ្មី';
$string['newenrols_desc'] = 'អនុញ្ញាតឲ្យអ្នកប្រើចុះឈ្មោះចូលរៀនដោយខ្លួនឯងក្នុងវគ្គសិក្សាថ្មី';
$string['newenrols_help'] = 'នេះជាការកំណត់ថាតើអ្នកប្រើម្នាក់អាចចុះឈ្មោះចូលរៀនក្នុងវគ្គសិក្សានេះទេ។';
$string['nopassword'] = 'មិនទាមទារកូនសោសម្រាប់ចូលរៀនទេ។';
$string['password'] = 'កូនសោសម្រាប់ចូលរៀន';
$string['password_help'] = 'កូនសោសម្រាប់ចូលរៀនអាចឲ្យអ្នកដាក់កំហិតការចូលរៀនក្នុងវគ្គសិក្សាសម្រាប់តែអ្នកដែលស្គាល់កូនសោប៉ុណ្ណោះ។

ប្រសិនបើអ្នកទុកប្រអប់ទិន្នន័យនេះឲ្យនៅទទេ នោះអ្នកណាក៏អាចចូលរៀនបានដែរ។

សូមចំណាំថាអ្នកប្រើត្រូវបានទាមទារឲ្យផ្តល់សោសម្រាប់ចូលរៀនតែម្តងប៉ុណ្ណោះនៅពេលដែលគេចុះឈ្មោះចូលរៀន។';
$string['passwordinvalid'] = 'កូនសោសម្រាប់ចូលរៀនមិនត្រឹមត្រូវទេ។ សូមព្យាយាមម្តងទៀត។';
$string['passwordinvalidhint'] = 'កូនសោចុះឈ្មោះមិនត្រឹមត្រូវឡើយ ។ សូមព្យាយាមម្ដងទៀត<br />
(នេះជាព័ត៌មានជំនួយ - វាចាប់ផ្ដើមដោយ \'{$a}\')';
$string['pluginname'] = 'ការចុះឈ្មោះដោយខ្លួនឯង';
$string['requirepassword'] = 'ទាមទារកូនសោសម្រាប់ចូលរៀន';
$string['role'] = 'តួនាទីដែលផ្តល់ឲ្យតាមលំនាំដើម';
$string['self:manage'] = 'គ្រប់គ្រងអ្នកចូលរៀន';
$string['self:unenrol'] = 'លុបឈ្មោះអ្នកប្រើពីវគ្គសិក្សា';
$string['self:unenrolself'] = 'លុបឈ្មោះខ្លួនឯងពីវគ្គសិក្សា';
$string['sendcoursewelcomemessage'] = 'ផ្ញើសារស្វាគមន៍សម្រាប់វគ្គសិក្សា';
$string['sendcoursewelcomemessage_help'] = 'នៅពេលដែលអ្នកប្រើម្នាក់ចុះឈ្មោះខ្លួនឯងក្នុងវគ្គសិក្សា ពួកគេអាចនឹងទទួលបានអ៊ីមែលដែលមានសារស្វាគមន៍។ ប្រសិនបើផ្ញើចេញពីអ្នកសម្រាប់ទាក់ទងក្នុងវគ្គសិក្សា (តាមលំនាំដើមជាគ្រូ) ហើយមានមនុស្សច្រើនដែលមានតួនាទីបែបនេះ នោះអ៊ីមែលនឹងត្រូវផ្ញើចេញពីមនុស្សដំបូងដែលត្រូវបានផ្តល់តួនាទីនេះ។';
$string['showhint'] = 'បង្ហាញព័ត៌មានជំនួយ';
$string['showhint_desc'] = 'បង្ហាញតួអក្សរដំបូងរបស់កូនសោសម្រាប់ចូលជាភ្ញៀវ។';
$string['status'] = 'អនុញ្ញាតការចូលរៀនដែលមានស្រាប់';
$string['status_desc'] = 'បើកវិធីចូលរៀនដោយខ្លួនឯងក្នុងវគ្គសិក្សាថ្មី។';
$string['status_help'] = 'ប្រសិនបើបើកការកំណត់នេះ ខណៈពេលដែលការកំណត់ \'អនុញ្ញាតការចូលរៀនថ្មី" ត្រូវបានបិទ នោះមានតែអ្នកដែលបានចុះឈ្មោះចូលរៀនពីមុនទេទើបអាចចូលក្នុងវគ្គសិក្សាបាន។  ប្រសិនបើបិទការកំណត់នេះ នោះវិធីចូលរៀនដោយខ្លួនឯងនឹងត្រូវបិទតែម្តង ហើយអ្នកដែលបានចូលរៀនដោយខ្លួនឯងទាំងប៉ុន្មានដែលមានស្រាប់ និងអ្នកប្រើថ្មីទៀតមិនអាចចូលរៀនដោយខ្លួនឯងទៀតទេ។';
$string['unenrol'] = 'លុបឈ្មោះអ្នកប្រើ';
$string['unenrolselfconfirm'] = 'តើអ្នកពិតជាចង់លុបឈ្មោះអ្នកពីវគ្គសិក្សា "{$a}" មែនទេ?';
$string['unenroluser'] = 'តើអ្នកពិតជាចង់លុបឈ្មោះ "{$a->user}" ពីវគ្គសិក្សា "{$a->course}" មែនទេ?';
$string['usepasswordpolicy'] = 'ប្រើគោលការណ៍សម្រាប់ពាក្យសម្ងាត់';
$string['usepasswordpolicy_desc'] = 'ប្រើគោលការណ៍ស្តង់ដារសម្រាប់ពាក្យសម្ងាត់ជាមួយនឹងកូនសោសម្រាប់ចូលរៀន';
$string['welcometocourse'] = 'សូមស្វាគមន៍ការមកកាន់ {$a}';
$string['welcometocoursetext'] = 'សូមស្វាគមន៍ការមកកាន់ {$a->coursename} !

ប្រសិនបើអ្នកមិនទាន់បានកែសម្រួលទំព័រប្រវត្តិរូបរបស់អ្នកនៅឡើយទេ សូមកែសម្រួលនៅពេលនេះ ដើម្បីឲ្យយើងអាចស្វែងយល់បន្ថែមអំពីអ្នក។

{$a->profileurl}';
