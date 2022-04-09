<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 19,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 20,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 21,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 22,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 23,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 24,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 25,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 26,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 27,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 28,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 29,
                'title' => 'course_create',
            ],
            [
                'id'    => 30,
                'title' => 'course_edit',
            ],
            [
                'id'    => 31,
                'title' => 'course_show',
            ],
            [
                'id'    => 32,
                'title' => 'course_delete',
            ],
            [
                'id'    => 33,
                'title' => 'course_access',
            ],
            [
                'id'    => 34,
                'title' => 'lesson_create',
            ],
            [
                'id'    => 35,
                'title' => 'lesson_edit',
            ],
            [
                'id'    => 36,
                'title' => 'lesson_show',
            ],
            [
                'id'    => 37,
                'title' => 'lesson_delete',
            ],
            [
                'id'    => 38,
                'title' => 'lesson_access',
            ],
            [
                'id'    => 39,
                'title' => 'test_create',
            ],
            [
                'id'    => 40,
                'title' => 'test_edit',
            ],
            [
                'id'    => 41,
                'title' => 'test_show',
            ],
            [
                'id'    => 42,
                'title' => 'test_delete',
            ],
            [
                'id'    => 43,
                'title' => 'test_access',
            ],
            [
                'id'    => 44,
                'title' => 'question_create',
            ],
            [
                'id'    => 45,
                'title' => 'question_edit',
            ],
            [
                'id'    => 46,
                'title' => 'question_show',
            ],
            [
                'id'    => 47,
                'title' => 'question_delete',
            ],
            [
                'id'    => 48,
                'title' => 'question_access',
            ],
            [
                'id'    => 49,
                'title' => 'question_option_create',
            ],
            [
                'id'    => 50,
                'title' => 'question_option_edit',
            ],
            [
                'id'    => 51,
                'title' => 'question_option_show',
            ],
            [
                'id'    => 52,
                'title' => 'question_option_delete',
            ],
            [
                'id'    => 53,
                'title' => 'question_option_access',
            ],
            [
                'id'    => 54,
                'title' => 'test_result_create',
            ],
            [
                'id'    => 55,
                'title' => 'test_result_edit',
            ],
            [
                'id'    => 56,
                'title' => 'test_result_show',
            ],
            [
                'id'    => 57,
                'title' => 'test_result_delete',
            ],
            [
                'id'    => 58,
                'title' => 'test_result_access',
            ],
            [
                'id'    => 59,
                'title' => 'test_answer_create',
            ],
            [
                'id'    => 60,
                'title' => 'test_answer_edit',
            ],
            [
                'id'    => 61,
                'title' => 'test_answer_show',
            ],
            [
                'id'    => 62,
                'title' => 'test_answer_delete',
            ],
            [
                'id'    => 63,
                'title' => 'test_answer_access',
            ],
            [
                'id'    => 64,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 65,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 66,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 67,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 68,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 69,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 70,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 71,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 72,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 73,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 74,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 75,
                'title' => 'product_create',
            ],
            [
                'id'    => 76,
                'title' => 'product_edit',
            ],
            [
                'id'    => 77,
                'title' => 'product_show',
            ],
            [
                'id'    => 78,
                'title' => 'product_delete',
            ],
            [
                'id'    => 79,
                'title' => 'product_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
