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
 * Strings for component 'tool_xmldb', language 'km', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_xmldb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftertable'] = 'បន្ទាប់ពីតារាង ៖';
$string['back'] = 'ថយក្រោយ';
$string['backtomainview'] = 'ថយក្រោយទៅមេ';
$string['cannotuseidfield'] = 'មិនអាចបញ្ចូលប្រអប់ទិន្នន័យ "លេខសម្គាល់" បានទេ ។ វាជាជួរឈរលេខរៀងស្វ័យប្រវត្តិ';
$string['change'] = 'ផ្លាស់ប្ដូរ';
$string['charincorrectlength'] = 'ប្រវែងមិនត្រឹមត្រូវសម្រាប់ប្រអប់ទិន្នន័យតួអក្សរ';
$string['checkbigints'] = 'ពិនិត្យមើល Bigints';
$string['check_bigints'] = 'រកមើលចំនួនគត់ DB មិនត្រឹមត្រូវ';
$string['checkdefaults'] = 'ពិនិត្យមើលលំនាំដើម';
$string['check_defaults'] = 'រកតម្លៃលំនាំដើមអថេរ';
$string['checkindexes'] = 'ពិនិត្យមើលលិបិក្រម';
$string['check_indexes'] = 'រកមើលលិបិក្រមមូលដ្ឋានទិន្នន័យដែលបាត់';
$string['completelogbelow'] = '(មើលកំណត់ហេតុពេញលេញនៃការស្វែងរកខាងក្រោម)';
$string['confirmcheckbigints'] = 'មុខងារនេះនឹងស្វែងរក <a href="http://tracker.moodle.org/browse/MDL-11038">ប្រអប់ទិន្នន័យដែលទំនងជាមានចំនួនគត់ខុស</a> ក្នុងម៉ាស៊ីនបម្រើ Moodle របស់អ្នក និងបង្កើត (មិនមែនប្រតិបត្តិទេ!) SQL Statements ដែលចាំបាច់ដោយស្វ័យប្រវត្តិដើម្បីកំណត់ចំនួនគត់នៅក្នុង DB របស់អ្នកយ៉ាងត្រឹមត្រូវ ។';
$string['confirmcheckdefaults'] = 'អនុគមន៍នេះនឹងស្វែងរកតម្លៃលំនាំដើមអថេរក្នុងម៉ាស៊ីនបម្រើ Moodle របស់អ្នក និងបង្កើត (ប៉ុន្តែមិនប្រតិបត្តិទេ!) សេចក្ដីថ្លែងការណ៍ SQL ដែលត្រូវការដើម្បីកំណត់តម្លៃលំនាំដើមទាំងអស់យ៉ាងត្រឹមត្រូវ ។<br /><br />
ពេលបង្កើត អ្នកអាចចម្លងសេចក្ដីថ្លែងការណ៍នោះ និងប្រតិបត្តិពួកវាដោយសុវត្ថិភាពជាមួយចំណុចប្រទាក់ SQL ចំណូលចិត្តរបស់អ្នក (កុំភ្លេចបម្រុងទុកទិន្នន័យរបស់អ្នក មុនពេលធ្វើវា) ។<br /><br />
វាត្រូវបានផ្ដល់អនុសាសន៍ឲ្យរត់កំណែចុងក្រោយបំផុត (+ កំណែ) ដែលមាន នៃការចេញផ្សាយ Moodle របស់អ្នក (1.8, 1.9, 2.x ...) មុនពេលប្រតិបត្តិការស្វែងរកចំនួនគត់ខុស ។<br /><br />
អនុគមន៍នេះមិនធ្វើអំពើមួយចំនួនដែលប្រឆាំងជាមួយ DB ទេ (គ្រាន់តែអានវា), ដូច្នេះវាអាចត្រូវបានប្រតិបត្តិដោយសុវត្ថិភាពនៅខណៈណាមួយ ។';
$string['confirmcheckindexes'] = 'អនុគមន៍នេះនឹងស្វែងរកលិបិក្រមដែលបាត់ចម្បងនៅក្នុងម៉ាស៊ីនបម្រើ Moodle របស់អ្នក ដោយបង្កើត (ប៉ុន្តែមិនប្រតិបត្តិ !) សេចក្ដីថ្លែងការណ៍ SQL ដែលត្រូវការដោយស្វ័យប្រវត្តិ ដើម្បីរក្សាឲ្យអ្វីៗនៅទាន់សម័យ ។ នៅពេលដែលបានបង្កើត អ្នកអាចចម្លងសេចក្ដីថ្លែងការណ៍ដូចនោះ ហើយប្រតិបត្តិពួកវាដោយសុវត្ថិភាពជាមួយនឹងចំណុចប្រទាក់ SQL សំណព្វរបស់អ្នក ។<br /><br />
អនុគមន៍នេះមិនធ្វើសកម្មភាពណាមួយផ្ទុយទៅនិង DB ទេ (គ្រាន់តែអានពីវា) ដូច្នេះ អាចត្រូវបានប្រតិបត្តិយ៉ាងមានសុវត្ថិភាពនៅខណៈណាមួយ ។<br /><br />
មុខងារនេះមិនធ្វើសកម្មភាពណាមួយផ្ទុយទៅនិង DB ទេ (គ្រាន់តែអានពីវា) ដូច្នេះ វាអាចត្រូវបានប្រតិបត្តិដោយមានសុវត្ថិភាពនៅខណៈណាមួយ ។<br /><br />
មុខងារនេះមិនធ្វើសកម្មភាពណាមួយផ្ទុយទៅនិង DB ទេ (គ្រាន់តែអានពីវា) ដូច្នេះ អាចត្រូវបានប្រតិបត្តិយ៉ាងមានសុវត្ថិភាពនៅខណៈណាមួយ ។';
$string['confirmdeletefield'] = 'តើអ្នកពិតជាចង់លុបប្រអប់ទិន្នន័យ ៖';
$string['confirmdeleteindex'] = 'តើអ្នកពិតជាចង់លុបលិបិក្រម ៖';
$string['confirmdeletekey'] = 'តើអ្នកពិតជាចង់លុបសោ ៖';
$string['confirmdeletetable'] = 'តើអ្នកពិតជាចង់លុបតារាង ៖';
$string['confirmdeletexmlfile'] = 'តើអ្នកពិតជាចង់លុបឯកសារ ៖';
$string['confirmrevertchanges'] = 'តើអ្នកពិតជាចង់ត្រឡប់ការផ្លាស់ប្ដូរដែលបានធ្វើទៅដើមវិញឬ ៖';
$string['create'] = 'បង្កើត';
$string['createtable'] = 'បង្កើតតារាង ៖';
$string['defaultincorrect'] = 'លំនាំដើមមិនត្រឹមត្រូវ';
$string['delete'] = 'លុប';
$string['delete_field'] = 'លុបប្រអប់ទិន្នន័យ';
$string['delete_index'] = 'លុបលិបិក្រម';
$string['delete_key'] = 'លុបសោ';
$string['delete_table'] = 'លុបតារាង';
$string['delete_xml_file'] = 'លុបឯកសារ XML';
$string['down'] = 'ចុះក្រោម';
$string['duplicate'] = 'ចម្លង';
$string['duplicatefieldname'] = 'មានប្រអប់ទិន្នន័យផ្សេងទៀតដែលមានឈ្មោះនោះរួចហើយ';
$string['edit'] = 'កែសម្រួល';
$string['edit_field'] = 'កែសម្រួលប្រអប់ទិន្នន័យ';
$string['edit_index'] = 'កែសម្រួលលិបិក្រម';
$string['edit_key'] = 'កែសម្រួលសោ';
$string['edit_table'] = 'កែសម្រួលតារាង';
$string['edit_xml_file'] = 'កែសម្រួលឯកសារ XML';
$string['enumvaluesincorrect'] = 'តម្លៃមិនត្រឹមត្រូវសម្រាប់ប្រអប់ទិន្នន័យ enum';
$string['field'] = 'ប្រអប់ទិន្នន័យ';
$string['fieldnameempty'] = 'ប្រអប់ទិន្នន័យសម្រាប់ឈ្មោះនៅទទេ';
$string['fields'] = 'ប្រអប់ទិន្នន័យ';
$string['filenotwriteable'] = 'ឯកសារមិនអាចសរសេរបានទេ';
$string['floatincorrectdecimals'] = 'ចំនួនទសភាគមិនត្រឹមត្រូវសម្រាប់ប្រអប់ទិន្នន័យចំនួនទសភាគ';
$string['floatincorrectlength'] = 'ប្រវែងមិនត្រឹមត្រូវសម្រាប់ប្រអប់ទិន្នន័យចំនួនទសភាគ';
$string['gotolastused'] = 'ទៅកាន់ឯកសារដែលបានប្រើចុងក្រោយ';
$string['incorrectfieldname'] = 'ឈ្មោះមិនត្រឹមត្រូវ';
$string['index'] = 'លិបិក្រម';
$string['indexes'] = 'លិបិក្រម';
$string['integerincorrectlength'] = 'ប្រវែងមិនត្រឹមត្រូវសម្រាប់ប្រអប់ទិន្នន័យចំនួនគត់';
$string['key'] = 'សោ';
$string['keys'] = 'សោ';
$string['listreservedwords'] = 'បញ្ជីពាក្យដែលបានបម្រុងទុក<br/>(បានប្រើដើម្បីធ្វើឲ្យ <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a> ទាន់សម័យ)';
$string['load'] = 'ផ្ទុក';
$string['main_view'] = 'ទិដ្ឋភាពមេ';
$string['missing'] = 'បាត់';
$string['missingindexes'] = 'រកឃើញលិបិក្រមដែលបាត់';
$string['mustselectonefield'] = 'អ្នកត្រូវតែជ្រើសប្រអប់ទិន្នន័យមួយ ដើម្បីមើលសកម្មភាពដែលទាក់ទងនឹងប្រអប់ទិន្នន័យ!';
$string['mustselectoneindex'] = 'អ្នកត្រូវតែជ្រើសលិបិក្រមមួយ ដើម្បីមើលសកម្មភាពដែលទាក់ទងនឹងលិបិក្រម!';
$string['mustselectonekey'] = 'អ្នកត្រូវតែជ្រើសសោមួយ ដើម្បីមើលសកម្មភាពដែលទាក់ទងនឹងសោ!';
$string['newfield'] = 'ប្រអប់ទិន្នន័យថ្មី';
$string['newindex'] = 'លិបិក្រមថ្មី';
$string['newkey'] = 'សោថ្មី';
$string['newtable'] = 'តារាងថ្មី';
$string['newtablefrommysql'] = 'តារាងថ្មីពី MySQL';
$string['new_table_from_mysql'] = 'តារាងថ្មីពី MySQL';
$string['nomissingindexesfound'] = 'រកមិនឃើញលិបិក្រមដែលបាត់ទេ មូលដ្ឋានទិន្នន័យរបស់អ្នកមិនត្រូវការសកម្មភាពបន្ថែមទៀតឡើយ ។';
$string['nowrongdefaultsfound'] = 'រកមិនឃើញតម្លៃលំនាំដើមអថេរ មូលដ្ឋានទិន្នន័យរបស់អ្នកមិនត្រូវការអំពើបន្ថែមទេ ។';
$string['nowrongintsfound'] = 'រកមិនឃើញចំនួនគត់ដែលខុសទេ មូលដ្ឋានទិន្នន័យរបស់អ្នកមិនត្រូវការអំពើផ្សេងទៀតទេ ។';
$string['numberincorrectdecimals'] = 'ចំនួនទសភាគមិនត្រឹមត្រូវសម្រាប់ប្រអប់ទិន្នន័យលេខ';
$string['numberincorrectlength'] = 'ប្រវែងមិនត្រឹមត្រូវសម្រាប់ប្រអប់ទិន្នន័យលេខ';
$string['pluginname'] = 'កម្មវិធីនិពន្ធ XMLDB';
$string['reserved'] = 'បានបម្រុងទុក';
$string['reservedwords'] = 'ពាក្យដែលបានបម្រុងទុក';
$string['revert'] = 'ត្រឡប់ទៅដើម';
$string['revert_changes'] = 'ត្រឡប់ការផ្លាស់ប្ដូរទៅដើម';
$string['save'] = 'រក្សាទុក';
$string['searchresults'] = 'លទ្ធផលការស្វែងរក';
$string['selectaction'] = 'ជ្រើសសកម្មភាព ៖';
$string['selectdb'] = 'ជ្រើសមូលដ្ឋានទិន្នន័យ ៖';
$string['selectfieldkeyindex'] = 'ជ្រើសប្រអប់ទិន្នន័យ/សោ/លិបិក្រម ៖';
$string['selectonecommand'] = 'សូមជ្រើសសកម្មភាពមួយពីបញ្ជីដើម្បីមើលកូដ PHP';
$string['selectonefieldkeyindex'] = 'សូមជ្រើសប្រអប់ទិន្នន័យ/សោ/លិបិក្រមពីបញ្ជីដើម្បីមើលកូដ PHP';
$string['selecttable'] = 'ជ្រើសតារាង ៖';
$string['table'] = 'តារាង';
$string['tables'] = 'តារាង';
$string['unload'] = 'មិនផ្ទុក';
$string['up'] = 'ឡើងលើ';
$string['view'] = 'មើល';
$string['viewedited'] = 'មើលអ្វីដែលបានកែសម្រួល';
$string['vieworiginal'] = 'មើលដើម';
$string['viewphpcode'] = 'មើលកូដ PHP';
$string['view_reserved_words'] = 'មើលពាក្យដែលបានបម្រុងទុក';
$string['viewsqlcode'] = 'មើលកូដ SQL';
$string['view_structure_php'] = 'មើលរចនាសម្ព័ន្ធ PHP';
$string['view_structure_sql'] = 'មើលរចនាសម្ព័ន្ធ SQL';
$string['view_table_php'] = 'មើលតារាង PHP';
$string['view_table_sql'] = 'មើលតារាង SQL';
$string['wrong'] = 'ខុស';
$string['wrongdefaults'] = 'រកឃើញលំនាំដើមខុស';
$string['wrongints'] = 'រកឃើញចំនួនពិតខុស';
$string['wronglengthforenum'] = 'ប្រវែងមិនត្រឹមត្រូវសម្រាប់ប្រអប់ទិន្នន័យ enum';
$string['wrongreservedwords'] = 'ពាក្យដែលបានបម្រុងទុកដែលបានប្រើបច្ចុប្បន្ន<br />(ចំណាំថា ឈ្មោះតារាងគឺមិននាំចូលទេ ប្រសិនបើប្រើ $CFG->prefix)<br />(ចំណាំថា ឈ្មោះតារាងគឺមិននាំចូលទេ ប្រើសិនបើប្រើ $CFG->prefix)';
$string['yesmissingindexesfound'] = 'រកឃើញលិបិក្រមដែលបាត់មួយចំនួននៅក្នុងមូលដ្ឋានទិន្នន័យរបស់អ្នក ។ នៅទីនេះ មានសេចក្ដីលម្អិត និងសេចក្ដីថ្លែងការណ៍ SQL ដែលត្រូវការរបស់ពួកគេ ដើម្បីប្រតិបត្តិជាមួយចំណុចប្រទាក់ SQL សំណព្វរបស់អ្នកដើម្បីបង្កើតពួកវាទាំងអស់ ។<br /><br />បន្ទាប់ពីធ្វើរួច វាត្រូវបានផ្ដល់អនុសាសន៍ឲ្យប្រតិបត្តិអត្ថប្រយោជន៍នេះម្ដងទៀត ដើម្បីពិនិត្យថារកមិនឃើញលិបិក្រមដែលបាត់បន្ថែមទៀតទេ ។';
$string['yeswrongdefaultsfound'] = 'រកឃើញតម្លៃលំនាំដើមអថេរមួយចំនួននៅក្នុងមូលដ្ឋានទិន្នន័យរបស់អ្នក ។ នេះគឺជាលម្អិតរបស់ពួកវា និងសេចក្ដីថ្លែងការណ៍ SQL ដែលត្រូវការដើម្បីប្រតិបត្តិជាមួយចំណុចប្រទាក់ SQL ចំណូលចិត្តរបស់អ្នក ដើម្បីជួសជុលពួកវាទាំងអស់ (កុំភ្លេចបម្រុងទុកទិន្នន័យរបស់អ្នក មុនពេលធ្វើវា) ។<br /><br />បន្ទាប់ពីធ្វើវា វាត្រូវបានផ្ដល់អនុសាសន៍ឲ្យប្រតិបត្តិឧបករណ៍ប្រើប្រាស់នេះ ដើម្បីពិនិត្យថារកមិនឃើញតម្លៃលំនាំដើមអថេរទៀតទេ ។';
$string['yeswrongintsfound'] = 'រកឃើញចំនួនគត់ខុសមួយចំនួននៅក្នុងមូលដ្ឋានទិន្នន័យរបស់អ្នក ។ នេះគឺជាលម្អិតរបស់ពួកវា និងសេចក្ដីថ្លែងការណ៍ SQL ដែលត្រូវប្រតិបត្តិជាមួយចំណុចប្រទាក់ SQL ចំណូលចិត្តរបស់អ្នកដើម្បីបង្កើតពួកវា (កុំភ្លេចបម្រុងទុកទិន្នន័យរបស់អ្នក មុនពេលធ្វើវា) ។<br /><br />បន្ទាប់ពីធ្វើវា វាត្រូវបានផ្ដល់អនុសាសន៍ឲ្យប្រតិបត្តិឧបករណ៍ប្រើប្រាស់នេះ ដើម្បីពិនិត្យថា រកមិនឃើញចំនួនគត់ដែលខុសទៀតទេ ។';
