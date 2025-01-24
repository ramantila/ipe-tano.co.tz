<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\DB::table('roles')->insert([
            [
                'slug' => 'admin',
                'name' => 'Admin',
                'createdby' => '1',
                'permissions' => '{"business":true,"business.view":true,"business.update":true,"business.delete":true, "business.create":true,"business_claims":true,"business_claims.view":true,"business_claims.update":true,"business_claims.delete":true,"business_claims.create":true,"reviews":true,"reviews.view":true,"reviews.update":true,"reviews.delete":true,"reviews.create":true,"user":true,"user.view":true,"user.update":true,"user.delete":true,"user.create":true,"role":true,"role.view":true,"role.update":true,"role.delete":true,"role.create":true,"category":true,"category.view":true,"category.update":true,"category.delete":true,"category.create":true}'
            ],
            [
                'slug' => 'business',
                'name' => 'Business',
                'createdby' => '1',
                'permissions' => '{"manage_business":true,"manage_business.view":true,"manage_business.update":true,"manage_business.delete":true,"manage_business.create":true, "manage_overview":true,"manage_overview.view":true,"manage_overview.update":true,"manage_overview.delete":true,"manage_overview.create":true,"claim":true,"claim.view":true,"claim.update":true,"claim.delete":true, "claim.create":true,"manage_review":true,"manage_review.view":true,"manage_review.update":true,"manage_review.delete":true, "manage_review.create":true}'
            ],
            [
                'slug' => 'consumer',
                'name' => 'Consumer',
                'createdby' => '1',
                'permissions' => ''
            ]
        ]);
    }
}
