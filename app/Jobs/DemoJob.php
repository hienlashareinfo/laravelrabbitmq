<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class DemoJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $data;
//    public function __construct($data)
//    {
//        $this->data = $data;
//    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
//        if ($this->data == 'hehehhehe'){
//            dd('Job created');
//        }
       Log::info($this->data);
    }
}
