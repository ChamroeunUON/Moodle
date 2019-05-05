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
 * Strings for component 'assignfeedback_offline', language 'km', branch 'MOODLE_36_STABLE'
 *
 * @package   assignfeedback_offline
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'អះអាងពីការនាំចូលពិន្ទុ';
$string['default'] = 'បើកជាស្រេច';
$string['default_help'] = 'ប្រសិនបើបើក នោះការដាក់ពិន្ទុក្រៅបណ្តាញដោយប្រើសន្លឹកកិច្ចការនឹងត្រូវបានបើកជាស្រេចសម្រាប់កិច្ចការថ្មីទាំងអស់។';
$string['downloadgrades'] = 'ទាញយកសន្លឹកកិច្ចការសម្រាប់ដាក់ពិន្ទុ';
$string['enabled'] = 'សន្លឹកកិច្ចការសម្រាប់ដាក់ពិន្ទុក្រៅបណ្តាញ';
$string['enabled_help'] = 'ប្រសិនបើបើក គ្រូនឹងអាចទាញយកនិងផ្ទុកឡើងសន្លឹិកកិច្ចការដែលមានពិន្ទុសិស្សនៅពេលដាកើពិន្ទុកិច្ចការ។';
$string['feedbackupdate'] = 'ដាក់ប្រអប់ទិន្នន័យ "{$a->field}" សម្រាប់ "{$a->student}" ទៅជា "{$a->text}"';
$string['gradelockedingradebook'] = 'ពិន្ទុត្រូវបានចាក់សោក្នុងបញ្ជីពិន្ទុសម្រាប់ {$a}';
$string['graderecentlymodified'] = 'ពិន្ទុត្រូវបានកែប្រែក្នុង Moodle ថ្មីជាងពិន្ទុនៅក្នុងសន្លឹកកិច្ចការដាក់ពិន្ទុសម្រាប់  {$a}';
$string['gradesfile'] = 'សន្លឹកកិច្ចការដាក់ពិន្ទុ (ប្រភេទ csv)';
$string['gradesfile_help'] = 'សន្លឹិកកិច្ចការដាក់ពិន្ទុដែលពិន្ទុត្រូវបានកែប្រែ។ ឯកសារនេះត្រូវជាឯកសារ CSV ដែលត្រូវបានទាញយកពីកិច្ចការនេះ និងត្រូវមានជួរឈរសម្រាប់ពិន្ទុសិស្ស និង ព័ត៌មានអត្តសញ្ញាណ។ កម្មវិធីបម្លែងកូដសម្រាប់ឯកសារនេះត្រូវតែជា "UFT-8"។';
$string['gradeupdate'] = 'ដាក់ពិន្ទុសម្រាប់ {$a->student} ទៅជា {$a->grade}';
$string['ignoremodified'] = 'អនុញ្ញាតឱ្យកែប្រែជាថ្មីនូវកំណត់ត្រាដែលត្រូវបានកែប្រែនៅក្នុង Moodle ក្នុងពេលថ្មីៗជាងនៅក្នុងសៀវភៅបញ្ជី។';
$string['ignoremodified_help'] = 'When the grading worksheet is downloaded from Moodle it contains the last modified date for each of the grades. If any of the grades are updated in Moodle after this worksheet is downloaded, by default Moodle will refuse to overwrite this updated information when importing the grades. By selecting this option Moodle will disable this safety check and it may be possible for multiple markers to overwrite each others grades.';
$string['importgrades'] = 'អះអាងការកែប្រែក្នុងសន្លឹកកិច្ចការដាក់ពិន្ទុ';
$string['invalidgradeimport'] = 'Moodle មិនអាចអានសន្លឹកកិច្ចការដែលបានផ្ទុកឡើងទេ។ សូមធ្វើឲ្យប្រាកដថាវាត្រូវបានរក្សាទុកក្នុងទម្រង់ឯកសារ CSV ហើយសូមព្យាយាមម្តងទៀត។';
$string['nochanges'] = 'រកមិនឃើញពិន្ទុដែលបានកែប្រែក្នុងសន្លឹកកិច្ចការដែលបានផ្ទុកឡើងទេ';
$string['offlinegradingworksheet'] = 'ពិន្ទុ';
$string['pluginname'] = 'សន្លឹកកិច្ចការសម្រាប់ដាក់ពិន្ទុក្រៅបណ្តាញ';
$string['processgrades'] = 'នាំចូលពិន្ទុ';
$string['skiprecord'] = 'រំលងកំណត់ត្រា';
$string['updatedgrades'] = 'បានកែប្រែពិន្ទុ និងមូលវិចារណ៍ជាថ្មី {$a}';
$string['updaterecord'] = 'កែប្រែកំណត់ត្រាថ្មី';
$string['uploadgrades'] = 'ផ្ទុកឡើងនូវសន្លឹកកិច្ចការដាក់ពិន្ទុ';
