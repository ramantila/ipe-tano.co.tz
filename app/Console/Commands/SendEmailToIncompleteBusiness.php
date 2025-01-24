<?php

namespace App\Console\Commands;

use App\Mail\IncompleteForm;
use App\Models\Business;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmailToIncompleteBusiness extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email-to-incomplete-business';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $incompleteBusinessUsers = User::with('businesses')
        ->whereHas('businesses', function ($query) {
            $query->where(function ($q) {
                $q->whereNull('letter')
                  ->orWhere('letter', '')
                  ->orWhereNull('business_licence')
                  ->orWhere('business_licence', '')
                  ->orWhereNull('company_reg')
                  ->orWhere('company_reg', '');
            })
            ->where('created_at', '<', Carbon::now()->subDay());
        })
        ->get();
    
        foreach ($incompleteBusinessUsers as $user) {
            foreach ($user->businesses as $business) {
                $missingItems = [];
    
                if (is_null($business->letter) || $business->letter === '') {
                    $missingItems[] = 'verification letter';
                }
                if (is_null($business->business_licence) || $business->business_licence === '') {
                    $missingItems[] = 'business registration certificate';
                }
                if (is_null($business->company_reg) || $business->company_reg === '') {
                    $missingItems[] = 'business license';
                }
    
                if (!empty($missingItems)) {
                    Mail::to($user->email)->send(new IncompleteForm($business, $missingItems));
                }
            }
        }
    }
    
}
