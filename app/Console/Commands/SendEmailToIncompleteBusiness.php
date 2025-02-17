<?php

namespace App\Console\Commands;

use App\Mail\IncompleteForm;
use App\Models\Business;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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
    protected $description = 'Send email to users with incomplete business information';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Fetch users with businesses that have incomplete information
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
                ->where('created_at', '<', Carbon::now()->subDay());  // Businesses older than 1 day
            })
            ->get();

        // Iterate through the users and their businesses
        foreach ($incompleteBusinessUsers as $user) {
            foreach ($user->businesses as $business) {
                $missingItems = [];
    
                // Check for missing items
                if (empty($business->letter)) {
                    $missingItems[] = 'verification letter';
                }
                if (empty($business->business_licence)) {
                    $missingItems[] = 'business registration certificate';
                }
                if (empty($business->company_reg)) {
                    $missingItems[] = 'business license';
                }

                // Send email if there are missing items
                if (!empty($missingItems)) {
                    try {
                        Mail::to($user->email)->send(new IncompleteForm($business, $missingItems, $user));
                        $this->info("Email sent to {$user->email} for business ID {$business->id}.");
                    } catch (\Exception $e) {
                        Log::error("Failed to send email to {$user->email}: " . $e->getMessage());
                    }
                }
            }
        }
    }
}
