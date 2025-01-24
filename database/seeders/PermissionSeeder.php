<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->truncate();
        $statement = "INSERT INTO `permissions` (`id`, `parent_id`, `name`, `slug`, `description`) VALUES
            (1, 0, 'Business', 'business', 'Access Business Module'),
            (2, 1, 'View business', 'business.view', 'View business'),
            (3, 1, 'Update business', 'business.update', 'Update business'),
            (4, 1, 'Delete business', 'business.delete', 'Delete business'),
            (5, 1, 'Create business', 'business.create', 'Add new business'),
            (6, 0, 'Business Claims', 'business_claims', 'Access Business Claims Module'),
            (7, 6, 'View Business Claims', 'business_claims.view', 'View business claims'),
            (8, 6, 'Update Business Claims', 'business_claims.update', 'Update business claims'),
            (9, 6, 'Delete Business Claims', 'business_claims.delete', 'Delete business claims'),
            (10, 6, 'Create Business Claims', 'business_claims.create', 'Add new business claims'),
            (11, 0, 'Reviews', 'reviews', 'Access Reviews Module'),
            (12, 11, 'View reviews', 'reviews.view', 'View review '),
            (13, 11, 'Update reviews', 'reviews.update', 'Update review'),
            (14, 11, 'Delete reviews', 'reviews.delete', 'Delete review'),
            (15, 11, 'Create reviews', 'reviews.create', 'Add new review'),
            (16, 0, 'Category', 'category', 'Access Category Module'),
            (17, 16, 'View Category', 'category.view', 'View review '),
            (18, 16, 'Update Category', 'category.update', 'Update review'),
            (19, 16, 'Delete Category', 'category.delete', 'Delete review'),
            (20, 16, 'Create Category', 'category.create', 'Add new review'),
            (21, 0, 'User', 'user', 'Access Business Module'),
            (22, 21, 'View user', 'user.create', 'View user'),
            (23, 21, 'Update user', 'user.create', 'Update  user'),
            (24, 21, 'Delete user', 'user.create', 'Delete  user'),
            (25, 21, 'Create user', 'user.create', 'Create user'),
            (26, 0, 'Role', 'role', 'Access Role Module'),
            (27, 26, 'View role', 'role.create', 'View  role'),
            (28, 26, 'Update role', 'role.create', 'Update role'),
            (29, 26, 'Delete role', 'role.create', 'Delete role'),
            (30, 26, 'Create role', 'role.create', 'Create role'),
            (31, 0, 'Overview', 'admin_overview', 'Access Overview Module'),
            (32, 31, 'View Overview', 'admin_overview.view', 'View  Overview'),
            (33, 31, 'Update Overview', 'admin_overview.update', 'Update Overview'),
            (34, 31, 'Delete Overview', 'admin_overview.delete', 'Delete Overview'),
            (35, 31, 'Create Overview', 'admin_overview.create', 'Create Overview'),
            (36, 0, 'Manage Business', 'manage_business', 'Access Manage Business Module'),
            (37, 36, 'View manage business', 'manage_business.view', 'View  business'),
            (38, 36, 'Update manage  business', 'manage_business.update', 'Update business'),
            (39, 36, 'Delete manage business', 'manage_business.delete', 'Delete business'),
            (40, 36, 'Create manage business', 'manage_business.create', 'Create business'),
            (41, 0, 'Manage Overview', 'manage_overview', 'Access Manage Overview Module'),
            (42, 41, 'View manage overview', 'manage_overview.view', 'View  overview'),
            (43, 41, 'Update manage  overview', 'manage_overview.update', 'Update overview'),
            (44, 41, 'Delete manage overview', 'manage_overview.delete', 'Delete overview'),
            (45, 41, 'Create manage overview', 'manage_overview.create', 'Create overview'),
            (46, 0, 'Claim', 'claim', 'Access Claim Module'),
            (47, 46, 'View manage claim', 'claim.view', 'View  overview'),
            (48, 46, 'Update  claim', 'claim.update', 'Update claim'),
            (49, 46, 'Delete claim', 'claim.delete', 'Delete claim'),
            (50, 46, 'Create claim', 'claim.create', 'Create claim'),
            (51, 0, 'Overview', 'business_overview', 'Access Claim Module'),
            (52, 51, 'View overview', 'business_overview.view', 'View  overview'),
            (53, 51, 'Update  overview', 'business_overview.update', 'Update overview'),
            (54, 51, 'Delete overview', 'business_overview.delete', 'Delete overview'),
            (55, 51, 'Create overview', 'business_overview.create', 'Create overview'),
            (56, 0, 'Manage Review', 'manage_review', 'Access Review Module'),
            (57, 56, 'View Review', 'manage_review.view', 'View  Review'),
            (58, 56, 'Update  Review', 'manage_review.update', 'Update Review'),
            (59, 56, 'Delete Review', 'manage_review.delete', 'Delete Review'),
            (60, 56, 'Create Review', 'manage_review.create', 'Create overview')
            ;";
        DB::unprepared($statement);
    }
}
