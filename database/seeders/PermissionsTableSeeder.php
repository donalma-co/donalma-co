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
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 20,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 21,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 22,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 23,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 24,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 25,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 26,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 27,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 28,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 29,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 30,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 31,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 32,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 33,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 34,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 35,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 36,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 37,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 38,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 39,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 40,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 41,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 42,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 43,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 44,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 45,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 46,
                'title' => 'global_var_access',
            ],
            [
                'id'    => 47,
                'title' => 'department_create',
            ],
            [
                'id'    => 48,
                'title' => 'department_edit',
            ],
            [
                'id'    => 49,
                'title' => 'department_show',
            ],
            [
                'id'    => 50,
                'title' => 'department_delete',
            ],
            [
                'id'    => 51,
                'title' => 'department_access',
            ],
            [
                'id'    => 52,
                'title' => 'city_create',
            ],
            [
                'id'    => 53,
                'title' => 'city_edit',
            ],
            [
                'id'    => 54,
                'title' => 'city_show',
            ],
            [
                'id'    => 55,
                'title' => 'city_delete',
            ],
            [
                'id'    => 56,
                'title' => 'city_access',
            ],
            [
                'id'    => 57,
                'title' => 'document_type_create',
            ],
            [
                'id'    => 58,
                'title' => 'document_type_edit',
            ],
            [
                'id'    => 59,
                'title' => 'document_type_show',
            ],
            [
                'id'    => 60,
                'title' => 'document_type_delete',
            ],
            [
                'id'    => 61,
                'title' => 'document_type_access',
            ],
            [
                'id'    => 62,
                'title' => 'foundation_access',
            ],
            [
                'id'    => 63,
                'title' => 'type_create',
            ],
            [
                'id'    => 64,
                'title' => 'type_edit',
            ],
            [
                'id'    => 65,
                'title' => 'type_show',
            ],
            [
                'id'    => 66,
                'title' => 'type_delete',
            ],
            [
                'id'    => 67,
                'title' => 'type_access',
            ],
            [
                'id'    => 68,
                'title' => 'organization_create',
            ],
            [
                'id'    => 69,
                'title' => 'organization_edit',
            ],
            [
                'id'    => 70,
                'title' => 'organization_show',
            ],
            [
                'id'    => 71,
                'title' => 'organization_delete',
            ],
            [
                'id'    => 72,
                'title' => 'organization_access',
            ],
            [
                'id'    => 73,
                'title' => 'donation_create',
            ],
            [
                'id'    => 74,
                'title' => 'donation_edit',
            ],
            [
                'id'    => 75,
                'title' => 'donation_show',
            ],
            [
                'id'    => 76,
                'title' => 'donation_delete',
            ],
            [
                'id'    => 77,
                'title' => 'donation_access',
            ],
            [
                'id'    => 78,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 79,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 80,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 81,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 82,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 83,
                'title' => 'project_create',
            ],
            [
                'id'    => 84,
                'title' => 'project_edit',
            ],
            [
                'id'    => 85,
                'title' => 'project_show',
            ],
            [
                'id'    => 86,
                'title' => 'project_delete',
            ],
            [
                'id'    => 87,
                'title' => 'project_access',
            ],
            [
                'id'    => 88,
                'title' => 'automatic_debt_create',
            ],
            [
                'id'    => 89,
                'title' => 'automatic_debt_edit',
            ],
            [
                'id'    => 90,
                'title' => 'automatic_debt_show',
            ],
            [
                'id'    => 91,
                'title' => 'automatic_debt_delete',
            ],
            [
                'id'    => 92,
                'title' => 'automatic_debt_access',
            ],
            [
                'id'    => 93,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 94,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 95,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 96,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 97,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
